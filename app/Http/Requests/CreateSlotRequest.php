<?php

namespace App\Http\Requests;

use App\Models\Slot;
use App\Rules\SlotOverlap;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CreateSlotRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'days' => 'required',
            'startDate' => 'required',
            'endDate' => 'required|after:startDate',

            'startTime' => 'required',
            'endTime' => 'required|after:startTime',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'The :attribute field is required',
            'endDate.after' => 'De end date should be after the start date',
            'endTime.after' => 'De end time should be after the start time',
        ];
    }

    public function persist()
    {
        $result = ['persisted' => false, 'overlapOccurred' => false];
        $persisted = false;
        $days = request('days');
        $checkDate = Carbon::parse(request('startDate'));
        $periodEndDate = Carbon::parse(request('endDate'));
        $startTime = Carbon::parse(request('startTime'));
        $endTime = Carbon::parse(request('endTime'));

        while ($checkDate <= $periodEndDate) {
            if (in_array($checkDate->dayOfWeek, $days)) {
                $startDate = new Carbon($checkDate->format('Y-m-d') . ' ' . $startTime->format('H:i'));
                $endDate = new Carbon($checkDate->format('Y-m-d') . ' ' . $endTime->format('H:i'));
                if(Slot::where('startDate', '<=', $startDate)->where('endDate', '>=', $startDate)->count() == 0 && Slot::where('startDate', '<=', $endDate)->where('endDate', '>=', $endDate)->count() == 0){
                    $slot = Slot::create([
                        'startDate' => $startDate,
                        'endDate' => $endDate,
                    ]);
                    $result['persisted'] = true;
                }
                else{
                    $result['overlapOccurred'] = true;
                }
            }
            $checkDate->addDay();
        }
        return $result;
    }
}

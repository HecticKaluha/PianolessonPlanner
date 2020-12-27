<?php

namespace App\Http\Requests;

use App\Models\Slot;
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
            'startDate' => 'required|before:endDate',
            'endDate' => 'required|after:startDate',

            'startTime' => 'required|before:endTime',
            'endTime' => 'required|after:startTime',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'The :attribute field is required',
            'startDate.before' => 'The start date should be before the end date',
            'endDate.after' => 'The end date should be after the start date',
            'startTime.before' => 'The start time should be before the end time',
            'endTime.after' => 'The end time should be after the start time',
        ];
    }

    public function persist()
    {
        $result = ['persisted' => false, 'overlapOccurred' => false];
        $days = request('days');
        $checkDate = Carbon::parse(request('startDate'));
        $periodEndDate = Carbon::parse(request('endDate'));
        $startTime = Carbon::parse(request('startTime'));
        $endTime = Carbon::parse(request('endTime'));

        while ($checkDate <= $periodEndDate) {
            if (in_array($checkDate->dayOfWeek, $days)) {
                if(Slot::where('date', '=', $checkDate)->where('startTime', '<=', $startTime)->where('endTime', '>=', $startTime)->count() == 0 && Slot::where('date', '=', $checkDate)->where('startTime', '<=', $endTime)->where('endTime', '>=', $endTime)->count() == 0){
                    $slot = Slot::create([
                        'date' => $checkDate,
                        'startTime' => $startTime,
                        'endTime' => $endTime,
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

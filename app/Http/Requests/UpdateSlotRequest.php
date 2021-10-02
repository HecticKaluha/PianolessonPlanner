<?php

namespace App\Http\Requests;

use App\Models\Slot;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSlotRequest extends FormRequest
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
            'date' => 'required',
            'startTime' => 'required|before:endTime',
            'endTime' => 'required|after:startTime',
            'category' => 'nullable|exists:categories,id',
            'email' => 'nullable|email:rfc,dns',
            'emailStatus' => 'nullable|boolean'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'The :attribute field is required',
            'startTime.before' => 'The start time should be before the end time',
            'endTime.after' => 'The end time should be after the start time',
            'category.exists' => 'The category should exist in the database',
            'email.email' => 'The email should be a valid email address',
            'emailStatus.boolean' => 'The :attribute field should be 0 or 1',
        ];
    }

    public function patch($slot)
    {
        $persisted = false;
        $date = Carbon::parse(request('date'));
        $startTime = Carbon::parse(request('startTime'));
        $endTime = Carbon::parse(request('endTime'));
        $category_id = request('category');
        $name = request('name');
        $email = request('email');
        $remarks = request('remarks');
        $emailStatus = request('emailStatus');

        if(Slot::where('date', '=', $date)->where('startTime', '<=', $startTime)->where('endTime', '>=', $startTime)->where('id', '!=', $slot->id)->count() == 0 && Slot::where('date', '=', $date)->where('startTime', '<=', $endTime)->where('endTime', '>=', $endTime)->where('id', '!=', $slot->id)->count() == 0){
            $slot->date = $date;
            $slot->startTime = $startTime;
            $slot->endTime = $endTime;
            $slot->category_id = $category_id;
            $slot->name = $name;
            $slot->email = $email;
            $slot->remarks = $remarks;
            $slot->emailStatus = $emailStatus;

            $slot->save();
            $persisted = true;
        }
        return $persisted;
    }
}

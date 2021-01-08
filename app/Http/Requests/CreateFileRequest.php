<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFileRequest extends FormRequest
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
            'files' => 'required|max:10',
//            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            'files.*' => 'mimes:jpg,jpeg,png,gif,svg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'The :attribute field is required',
            'files.max' => 'You can only upload :max files at once.',
//            'images.*.image' => 'The files must all be images, silly!',
            'files.*.mimes' => 'You can only upload PNG, JPG, JPEG, GIF and SVG files',
            'files.*.max' => 'The files must be smaller than :max kb each.',
        ];
    }
}

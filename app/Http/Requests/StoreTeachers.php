<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTeachers extends FormRequest
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
                    //'Email' => 'required|unique:teachers,Email,'.$this->id,
                    'Email' => ['required', Rule::unique('teachers', 'Email')->ignore($this->Parent_id), ],
                    'Password' => 'required',
                    'Name_ar' => 'required',
                    'Name_en' => 'required',
                    'Specialization_id' => 'required',
                    'Gender_id' => 'required',
                    'Joining_Date' => 'required|date|date_format:Y-m-d',
                    'Address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Email.required' => trans('validation.required'),
            'Email.unique' => trans('validation.unique'),
            'Password.required' => trans('validation.required'),
            'Name_ar.required' => trans('validation.required'),
            'Name_en.required' => trans('validation.required'),
            'Specialization_id.required' => trans('validation.required'),
            'Gender_id.required' => trans('validation.required'),
            'Joining_Date.required' => trans('validation.required'),
            'Address.required' => trans('validation.required'),
        ];
    }


}

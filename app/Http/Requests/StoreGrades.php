<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreGrades extends FormRequest
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


            'Name' => [
            'required',
            Rule::unique('grades', 'Name->ar')->ignore($this->id),
        ],
        'Name_en' => [
            'required',
            Rule::unique('grades', 'Name->en')->ignore($this->id),
        ],


            // 'Name' => 'required|unique:grades,Name->ar,'.$this->id,
            // 'Name_en' => 'required|unique:grades,Name->en,'.$this->id,

            // 'Name.*' => [
            //     'required',
            //     'unique:grades,Name',
            //     'distinct',
            // ],
        ];
    }

    public function messages()
    {
        return [
            'Name.required' => trans('validation.required'),
            'Name.unique' => trans('validation.unique'),
            'Name_en.required' => trans('validation.required'),
            'Name_en.unique' => trans('validation.unique'),
        ];
    }


}

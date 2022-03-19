<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->getMethod()=='PUT') {
            $rules=[
            'name'=>'required|string|max:255',
            'image'=>'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio'=>'required',
            'age'=>'required|numeric'
            ];
        }

        if ($this->getMethod()=='POST') {
            $rules=[
            'name'=>'required|string|max:255',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio'=>'required',
            'age'=>'required|numeric'
            ];
        }
        return $rules;
    }
}

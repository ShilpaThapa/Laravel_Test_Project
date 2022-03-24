<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        if ($this->getMethod()=='POST') {
            $rules=[
                'title'=>'required|max:255',
                'image'=>'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'description'=>'required',
                'status'=>'required',
                'position'=>'required|unique:posts,position',
                'category_id'=>'required'
            ];
        }

        if ($this->getMethod()=='PUT') {
            $rules=[
                'title'=>'required|max:255',
                'image'=>'mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'description'=>'required',
                'status'=>'required',
                'position'=>'required|unique:posts,position,'.$this->id,
                'category_id'=>'required'
            ];
        }
        return $rules;
    }
}

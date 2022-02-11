<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePro extends FormRequest
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
        if($this->isMethod('post')){
            $rules = [
                //
                'warehouse'=>'required',
                'products.0'=>'required',
                'quantity.0'=>'required'
                
            ];
            return $rules;
            }
            else{
                return [];
            }
    }
}

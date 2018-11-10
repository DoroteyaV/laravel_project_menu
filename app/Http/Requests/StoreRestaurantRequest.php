<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
            'name' => 'required|min:3', 
            'addres' => 'required|max:100'
    
        ];
    }
	 public function messages()
    {
        return [
            'description.max' => 'Не повече от 100 знака'
        ];
    }
}


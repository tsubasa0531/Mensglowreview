<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
         return [
            'product.name' => 'required|string|max:100',
            'product.body' => 'required|string|max:4000',
            'product.price' => 'required|string|max:100',
            //
        ];
            //
    
    }
}

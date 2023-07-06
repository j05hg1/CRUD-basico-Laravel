<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        /*
        * Son campos obligatorios (required) y que deben ser únicos en la tabla productos
        */
        return [
            'nombre'=>'required|unique:productos|max:255',
            'stock'=>'required',
            'precio'=>'required',
        ];
    }
}

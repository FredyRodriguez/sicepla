<?php

namespace App\Container\Sicepla\Src\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'telefono' =>'required|min:8|max:11',
            'documento' =>'required|integer',
            'direccion' => 'required|string|max:40',
            'email'=>'required|string|email|max:255|unique:TBL_Usuarios',
            'password'=>'required|string|min:7|confirmed',
        ];
    }
}

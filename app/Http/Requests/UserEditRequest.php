<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'username' => 'required',
            'first_name' => 'required',
            'email' => 'required|email|unique:users,'.$user->id,
            'password' => 'required|min:5|max:20',
            /*'address' => 'required',
            'phone' => 'required',*/
            'dob' => 'required',
            /*'avatar' => 'required'*/
        ];
    }
}

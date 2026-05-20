<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class passwordRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'current_password'=>'required',
            'password'  => [
                'required',
                'confirmed',
                'string',
                'min:8', // Minimum 8 characters
                'regex:/^(?=.*[A-Z])(?=.*[\d\s\W]).{8,}$/', // At least one uppercase letter AND one number, symbol, or space
            ],

        ];
    }
    public function messages(): array
    {
        return [
            'current_password.required' => 'Please Enter current Password',

            'password.required'         => 'The password field is required.',
            'password.string'           => 'The password must be a valid string.',
            'password.min'              => 'The password must be at least 8 characters long.',
            'password.regex'            => 'The password must contain at least one uppercase letter and one number, symbol, or space.',
            'password.confirmed'        => 'The password confirmation does not match.',

        ];
    }

}

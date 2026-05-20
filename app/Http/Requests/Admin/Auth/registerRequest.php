<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class registerRequest extends FormRequest
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

            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')
                    ->whereNull('deleted_at'),
            ],

            'phone' => [
                'required',
                Rule::unique('users', 'phone')
                    ->whereNull('deleted_at'),
            ],

            'fullName' => 'required|max:50',

            'companyName' => 'required|max:50',

            'password' => [
                'required',
                'string',
            ],

            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:800',
        ];
    }
    public function messages(): array
    {
        return [
            'fullName.required' => 'The full name field is required.',
            'fullName.max'      => 'The full name must not exceed 50 characters.',
            'userName.max'      => 'The username must not exceed 50 characters.',

            'email.required'     => 'The email field is required.',
            'email.unique'       => 'This email is already in use.',
            'email.email'        => 'Please enter a valid email address.',
            'email.max'          => 'The email must not exceed 50 characters.',

            'phone.required'     => 'The phone number is required.',
            'phone.unique'       => 'This phone number is already in use.',
            'phone.numeric'      => 'The phone number must contain only numbers.',
            'phone.max'          => 'The phone number must not exceed 50 characters.',

            'companyName.required'      => 'The companyName field is required.',
            'companyName.max'           => 'The companyName must not exceed 50 characters.',

                'password.required'         => 'The password field is required.',
                'password.string'           => 'The password must be a valid string.',

            'image.image'        => 'The uploaded file must be an image.',
            'image.mimes'        => 'Only JPG, GIF, and PNG images are allowed.',
            'image.max'          => 'The image must not be larger than 800KB.',

        ];
    }

}

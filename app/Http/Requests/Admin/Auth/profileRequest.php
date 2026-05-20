<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class profileRequest extends FormRequest
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
             'email'     => 'required|unique:users,email,'.admin()->id.',id,deleted_at,NULL|email',
             'userName' => 'required|unique:users,userName,' . admin()->id . ',id,deleted_at,NULL',
             'phone'     => 'required|unique:users,phone,'.admin()->id.',id,deleted_at,NULL',
             'fullName'  => 'required|max:50',
             'image'     => 'nullable|image|mimes:jpg,jpeg,gif,png|max:800', // 800 KB max

        ];
    }
    public function messages(): array
    {
        return [
            'userName.required' => 'The username field is required.',
            'userName.unique'   => 'This username is already taken.',
            'userName.string'   => 'The username must be a valid string.',
            'userName.max'      => 'The username must not exceed 50 characters.',

            'email.required'     => 'The email field is required.',
            'email.unique'       => 'This email is already in use.',
            'email.email'        => 'Please enter a valid email address.',
            'email.max'          => 'The email must not exceed 50 characters.',

            'phone.required'     => 'The phone number is required.',
            'phone.unique'       => 'This phone number is already in use.',
            'phone.numeric'      => 'The phone number must contain only numbers.',
            'phone.max'          => 'The phone number must not exceed 50 characters.',

            'name.required'      => 'The name field is required.',
            'name.max'           => 'The name must not exceed 50 characters.',

            'image.image'        => 'The uploaded file must be an image.',
            'image.mimes'        => 'Only JPG, GIF, and PNG images are allowed.',
            'image.max'          => 'The image must not be larger than 800KB.',

        ];
    }

}

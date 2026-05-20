<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class adminRequest extends FormRequest
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
    $adminId = $this->route('Admin');

    return [
        'fullName' => 'required|string|max:50',

        'userName' => [
            'required',
            'min:3',
            Rule::unique('users', 'userName')
                ->whereNull('deleted_at')
                ->ignore($adminId),
        ],

        'phone' => [
            'required',
            'numeric',
            Rule::unique('users', 'phone')
                ->whereNull('deleted_at')
                ->ignore($adminId),
        ],

        'email' => [
            'nullable',
            'email',
            'min:3',
            Rule::unique('users', 'email')
                ->whereNull('deleted_at')
                ->ignore($adminId),
        ],

        'password' => request()->isMethod('put')
            ? 'nullable'
            : 'nullable|string|min:8|regex:/^(?=.*[A-Z])(?=.*[\d\s\W]).{8,}$/',

        'image' => 'nullable|image|mimes:jpg,jpeg,gif,png|max:800',
    ];
}

    public function messages()
    {
        return [
            'fullName.required' => 'The full name field is required.',
            'fullName.string' => 'The full name must be a string.',
            'fullName.max' => 'The full name may not be greater than 50 characters.',
    
            'userName.required' => 'The username field is required.',
            'userName.min' => 'The username must be at least 3 characters.',
            'userName.unique' => 'This username is already taken.',
    
            'phone.required' => 'The phone number is required.',
            'phone.numeric' => 'The phone number must be numeric.',
            'phone.unique' => 'This phone number is already used.',
    
            'email.email' => 'Please enter a valid email address.',
            'email.min' => 'The email must be at least 3 characters.',
            'email.unique' => 'This email is already registered.',
    
            'password.min' => 'The password must be at least 8 characters.',
            'password.regex' => 'The password must contain at least one uppercase letter and one digit or special character.',
    
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Allowed image types are jpg, jpeg, gif, and png.',
            'image.max' => 'The image size may not be greater than 800 KB.',
        ];
    }
    
    
}

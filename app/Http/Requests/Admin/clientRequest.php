<?php
    namespace App\Http\Requests\Admin;

use App\Models\Client;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Validation\Rule;

    class clientRequest extends FormRequest
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
            $userId = $this->route('Client'); ;

            // if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            //     $clientId = $this->route('Client'); 
            //     $company = User::findOrFail($clientId);
            //     $userId = $company->user_id;
            // }

            return [
                'fullName' => 'required|string|max:50',
                'userName' => [
                    'required',
                    'min:3',
                    Rule::unique('users', 'userName')->ignore($userId),
                ],
                'phone' => [
                    'required',
                    // 'digits:11',
                    'numeric',
                    Rule::unique('users', 'phone')->ignore($userId),
                ],
                'email' => [
                    'nullable',
                    'email',
                    'min:3',
                    Rule::unique('users', 'email')->ignore($userId),
                ],
                
                
                // "password" => $this->isMethod('PUT') ? 'nullable|confirmed|string|min:8|regex:/^(?=.*[A-Z])(?=.*[\d\s\W]).{8,}$/' :
                //     'required|confirmed|string|min:8|regex:/^(?=.*[A-Z])(?=.*[\d\s\W]).{8,}$/',
                "password" => $this->isMethod('PUT') ? 'nullable|confirmed|string|min:6' :
                    'required|confirmed|string|min:6',


                'image'              => 'nullable|image|mimes:jpg,jpeg,gif,png,webp|max:800',
            ];
        }

        
        public function messages()
    {
        return [
            'fullName.required' => 'الاسم الكامل مطلوب.',
            'fullName.string' => 'الاسم الكامل يجب أن يكون نصاً.',
            'fullName.max' => 'الاسم الكامل يجب ألا يتجاوز 50 حرفاً.',



            'userName.required' => 'اسم المستخدم مطلوب.',
            'userName.min' => 'اسم المستخدم يجب أن لا يقل عن 3 أحرف.',
            'userName.unique' => 'اسم المستخدم مستخدم من قبل.',

            'phone.required' => 'رقم الهاتف مطلوب.',
            'phone.digits' => 'رقم الهاتف يجب أن يكون مكونًا من 11 رقمًا.',
            'phone.numeric' => 'رقم الهاتف يجب أن يكون أرقام فقط.',
            'phone.unique' => 'رقم الهاتف مستخدم من قبل.',

            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
            'email.min' => 'البريد الإلكتروني يجب أن لا يقل عن 3 أحرف.',
            'email.unique' => ' البريد الإلكتروني مستخدم من قبل.',

            'password.min' => 'كلمة المرور يجب أن لا تقل عن 6 أحرف.',
            'password.confirmed' => 'تأكيد كلمة المرور غير متطابق.',
            'password.regex' => 'كلمة المرور يجب أن تحتوي على حرف كبير ورقم أو رمز.',

            'image.image' => 'يجب رفع صورة الشخصية صحيحة.',
            'image.mimes' => 'امتدادات الصورة الشخصية يجب أن تكون: jpg, jpeg, gif, png.',
            'image.max' => 'الصورة الشخصية يجب ألا تتجاوز 800 كيلوبايت.',


        ];
    }

        
    }
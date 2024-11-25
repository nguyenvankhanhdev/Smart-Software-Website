<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'tentaikhoan' => ['required', 'string', 'unique:users,tentaikhoan'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }
    public function messages(){
        return [
            'email.unique' => 'Email đã tồn tại',
            'tentaikhoan.required' => 'Tên tài khoản không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
        ];
    }
}

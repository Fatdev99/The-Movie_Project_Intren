<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|min:8',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string|min:8',
            're_password' => 'required|string|same:password'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập vào tên!',
            'name.min' => 'Tên phải có tối thiểu 8 kí tự!',
            'phone.required' => 'Bạn chưa nhập vào số điện thoại!',
            'address.required' => 'Bạn chưa nhập vào địa chỉ!',
            'email.required' => 'Bạn chưa nhập vào email!',
            'email.email' => 'Email chưa đúng định dạng. Ví dụ abc@gmail.com',
            'email.unique' => 'Email đã tồn tại. Vui lòng nhập email khác!',
            'password.required' => 'Bạn chưa nhập vào mật khẩu!',
            'password.min' => 'Mật khẩu phải có tối thiểu 8 kí tự!',
            're_password.required' => 'Bạn chưa nhập lại mật khẩu!',
            're_password.same' => 'Mật khẩu không khớp với ở trên!'
        ];
    }
}

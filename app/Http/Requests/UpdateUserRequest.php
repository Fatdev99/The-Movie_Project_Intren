<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //dd($this->route('id'));
        return [
            'name' => 'required|min:8',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email|unique:users,email,'. $this->route('id')    
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
        ];
    }
}

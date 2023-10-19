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
            'phone' => 'required|min:8',
            'address' => 'required',
            'email' => 'required|email' 
        ];

    }

    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập vào tên!',
            'name.min' => 'Tên phải có tối thiểu 8 kí tự!',
            'phone.required' => 'Bạn chưa nhập vào số điện thoại!',
            'phone.min' => 'Số điện thoại phải có ít nhất 8 số!',
            'address.required' => 'Bạn chưa nhập vào địa chỉ!',
            'email.required' => 'Bạn chưa nhập vào email!',
            'email.email' => 'Email chưa đúng định dạng. Ví dụ abc@gmail.com',
        ];
    }
}

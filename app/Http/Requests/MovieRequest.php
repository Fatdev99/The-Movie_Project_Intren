<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'name' => 'required',
            'release_date' => 'required',
            'runtime' => 'required|numeric',
            'description' => '', 
            'category' => 'required', 
            'picture' => 'required|string', 
            'source' => 'required|string'
        ];

    }

    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập vào tên phim!',
            'release_date.required' => 'Bạn chưa nhập vào ngày ra mắt bộ phim!',
            'runtime.required' => 'Bạn chưa nhập vào thời lượng phim!',
            'runtime.numeric' => 'Thời lượng phim phải là số!',
            'category.required' => 'Bạn chưa chọn dòng phim!',
            'picture.required' => 'Bạn chưa nhập vào link ảnh poster của phim!',
            'picture.string' => 'Đường dẫn phải là một chuỗi!',
            'source.required' => 'Bạn chưa nhập vào source phim!',
            'source.string' => 'Source phim phải là một chuỗi!',
        ];
    }
}

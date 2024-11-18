<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiKhachHangRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ho_va_ten'         =>  'required|min:4|max:100',
            'email'             =>  'required|email',
            'so_dien_thoai'     =>  'required|digits:9',
            'password'          =>  'required|min:6|max:50',
            're_password'       =>  'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'ho_va_ten.*'         =>  'Họ và tên phải từ 4 đến 100 ký tự',
            'email.*'             =>  'Email đã tồn tại hoặc không đúng định dạng',
            'so_dien_thoai.*'     =>  'Số điện thoại phải 10 số',
            'password.*'          =>  'Mật khẩu phải từ 6 đến 50 ký tự',
            're_password.*'       =>  'Nhập lại mật khẩu không trùng nhau',
        ];
    }
}

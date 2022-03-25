<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UpdateTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'  => 'string|max:30',
            'firstName' => 'string|max:30',
            'lastName'  => 'string|max:30',
            'phone'     => 'numeric',
            'email'     => 'string|email|max:255',
//            'password' => 'string|min:8',
//            'repeat_password' => 'string|min:8',
//            'new_password' => 'string|min:8',
//            'old_password' =>  function ($attribute, $value, $fail) {
//                if (!Hash::check($value, Auth::user()->password)) {
//                    $fail("Old Password didn't match");
//                }
//            },
//            'repeat_password' => 'string|min:8',
        ];

    }
}

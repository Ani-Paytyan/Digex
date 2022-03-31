<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UpdateTeacherPasswordRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $user = auth()->user();
        return [
            'current-password' => [
                'required',
                function ($attribute, $value, $fail) use ($user) {
                    dd(Hash::check($value, Auth::user()->password));
                    if (!Hash::check($value, Auth::user()->password)) {
                        $fail('Your password was not updated, since the provided current password does not match.');
                    }
                }
                ],
            'new-password' => [
                'required', 'min:6', 'confirmed', 'different:current_password'
            ],
            ];
    }
}


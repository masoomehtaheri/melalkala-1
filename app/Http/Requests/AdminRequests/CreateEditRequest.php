<?php

namespace App\Http\Requests\AdminRequests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CreateEditRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if($this->has('user_id')){
            $editUserId=null;
            if (Request::has('user_id')&& ctype_digit(Request::input('user_id'))){
                $editUserId=Request::input('user_id');
            }

            return [
                'first_name'=>'required',
                'last_name'=>'required',
                'email' => 'required|email|unique:users,email,'.$editUserId,
                'password' => 'min:6|confirmed:password_confirmation',
                'password_confirmation' => 'min:6',
                'tel'=>'required|',
                'address'=>'required',
                'role' => 'required|numeric',

            ];

        }
        else{
            return[
                'first_name'=>'required',
                'last_name'=>'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed:password_confirmation',
                'password_confirmation' => 'required|min:6',
                'tel'=>'required|',
                'address'=>'required',
                'role'=>'required|numeric',

            ];

        }

        }

}

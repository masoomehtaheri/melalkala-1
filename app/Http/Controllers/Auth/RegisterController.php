<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Utility\userUtility;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'tel' => 'required|max:255',
            'address' => 'required|max:255',
        ],[
                'first_name.required' => 'نام کاربری الزامی می باشد',
                'first_name.max' => 'حداکثر تعداد 255',
                'email.required' => 'ایمیل الزامی می باشد',
                'email.email' => 'ایمیل باید به صورت صحیح وارد شود',
                'email.unique' => 'ایمیل وارد شده قبلا استفاده شده است',
                'password.required' => 'کلمه عبور الزامی می باشد',
                'password.min' => 'حداقل تعداد کاراکتر برای کلمه عبور ۸6  می باشد',
                'password.confirmed' => 'کلمه عبور وارد شده تطبیق ندارد',
                'password_confirmation.required' => 'تکرار کلمه عبور الزامی می باشد',
                'tel.required' => 'تلفن الزامی است',
                'tel.max' => 'حداکثر تعداد 255',
                'address.required' => 'آدرس الزامی است',
                'address.max' => 'حداکثر تعداد 255',
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'email'      => $data['email'],
            'password'   => $data['password'],
            'role'       =>userUtility::SUBSCRIBER,
            'tel'        => $data['tel'],
            'address'    => $data['address']
        ]);
    }
}

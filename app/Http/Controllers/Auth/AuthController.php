<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Symfony\Component\Console\Input\Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = array(
            'name.required' => 'Không được để trống.'
        );

        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed:password_confirmation',
            'password_confirmation' => 'required|min:6'
        ]);
    }
    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống ',
        ];
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $data['level'] = 3;
        $data['status'] = 1;
        var_dump($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'level' => $data['level'],
            'status' => $data['status']
        ]);
    }


    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($social)
    {
        $userSocial = Socialite::driver($social)->user();
        $userSocial = (array) $userSocial;
        $user = User::where('email', $userSocial['email'])->first();
        if(empty($user)){
            $CreateUser = User::create([
                'name' => $userSocial['name'],
                'email' => $userSocial['email'],
            ]);
            $user = User::where('email', $userSocial['email'])->first();
        }
        Auth::login($user);
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers\Aspirant;

use App\Aspirant;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'app' => ['required', 'string', 'max:255'],
            'apm' => ['required', 'string', 'max:255'],
            'age'=> ['required', 'string', 'max:255'],
            'genre'=> ['required', 'string', 'max:255'],
            'direction'=> ['required', 'string', 'max:255'],
            'bornDate'=> ['required', 'string', 'max:255'],
            'cellphone'=> ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Aspirant
     */
    protected function create(array $data)
    {
        return Aspirant::create([

            'name'=> $data['name'],
            'app'=> $data['app'],
            'apm'=> $data['apm'],
            'age'=> $data['age'],
            'genre'=> $data['age'],
            'direction'=> $data['direction'],
            'bornDate'=> $data['bornDate'],
            'cellphone'=> $data['cellphone'],
            'email'=> $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    use RegistersUsers;
    
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/general';
    
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
            'name' => 'required|string|alpha_dash|max:255|unique:users',
            //'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            //'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    /**
     * Supporting api registering
     *
     * Note: ajax request will return json. web request will return redirect
     *
     * @param Request $request
     */
    public function apiRegister(Request $request)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails())
            return response('{"id": 0, "error": "invalid"}');
        event(new Registered($user = $this->create($request->all())));
        $this->guard()->login($user);
        if ($this->registered($request, $user))
            return response('{"id": 0, "error": "duplicated"}');
        return $user;
    }
    
    public function showRegistrationForm()
    {
        return view('hanoivip::auth.register');
    }
    
}

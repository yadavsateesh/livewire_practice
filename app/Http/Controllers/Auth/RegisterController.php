<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            /*'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], */
			'firstname' => ['required', 'alpha'],
            'lastname' => ['required', 'alpha'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact_number' => ['required', 'numeric'],
            'password' => ['required', 'string', 'confirmed'],
            'postcode' => ['required'],
            'hobbies' => ['required'],
            'gender' => ['required'],
          //  'state_id' => ['required'],
           // 'city_id' => ['required'],
          //  'role_id' => ['required','array'],
            'files' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
		/*  echo "<pre>";
		print_r($data);
		echo "</pre>";
		die;  */
		/* laravel last query print */
   //  \DB::enableQueryLog(); // Enable query log
         $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
			'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'password' => Hash::make($data['password']),
            'postcode' => $data['postcode'],
            'hobbies' => implode(",",$data['hobbies']),
            'gender' => $data['gender'],
           // 'state_id' => $data['state_id'],
           // 'city_id' => $data['city_id'],
           // 'role_id' => implode(",",$data['role_id']),
            'files' => implode(",",$uploadedFiles),
        ]);
		//dd(\DB::getQueryLog()); // Show results of log
		return $user;
    }
}

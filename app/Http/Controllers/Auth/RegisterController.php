<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;
use Session;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Models\Organization;

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
    protected $redirectTo = '/admin/home';

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
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
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
        $organization = Organization::where('name',strtolower($data['organization']))->first();
        if($organization){
            Session::flash('error','Organization with this name already exists');
            return back();
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verify_token' => Str::random(40),
        ]);

        $organization = $data['organization'];
        
        if($user){
            $mail =  Mail::send('mails.sendView', ['user' => $user, 'organization' => $organization], function ($message) use($user) {
                $message->from('wism@gmail.com');
                $message->to($user->email);
                $message->subject('Verify Email!');
            });
        }
        Session::flash('success','Please verify your email');
    }

    public function sendEmailDone($email, $verifyToken, $organization) {

        $user = User::where(['email' => $email, 'verify_token' => $verifyToken])->first();

        if ($user) {
            $user->confirmed = 1;
            $user->verify_token = NULL;
            $user->update();
            $organization = Organization::create([
                'name' => $organization
            ]);
            if($organization){
                $user->organization_id = $organization->id;
                $user->update();
            }
            else{
                $user->delete();
                Session::flash('error','Something went wrong try again');
                return redirect(route('register'));
            }
            return redirect(route('login'));
        } else {
            Session::flash('error','Invalid credentials');
            return redirect(route('register'));
        }
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);
        // $request->session()->flash('success','Please verify your email');
        return back();
    }
}

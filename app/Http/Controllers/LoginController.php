<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public $user;
    public function __construct()
    {
        $this->user = new User();
    }

    public function index(){
        return view('login');
    }

    public function loginAction(Request $req){
        $email = $req->email;
        $password = $req->password;

        $checkUsername = User::where('username', $email)->count();
        if($checkUsername == 0) {
            return Redirect::back()->with(['error' => 'Email anda belum terdaftar']);
        }

        $checkUserActive = User::where('username', $email)->where('status', 1)->count();
        if($checkUserActive != 1) {
            return Redirect::back()->with(['error' => 'Anda belum melakukan verifikasi email, silahkan cek inbox email anda']);
        }

        $credential = array(
            'username'     => $email,
            'password'  => $password
        );

        if(Auth::attempt($credential)) {
            $userData = User::where('username', $email)
                ->with('profile')
                ->where('status', 1)
                ->first();

            echo $userData; die();
            /*Session::put('name',$userData->name);
            Session::put('email',$userData->email);
            Session::put('isLogin',TRUE);
            return Redirect::to('/dashboard');*/
        } else {
            return Redirect::back()->with(['error' => 'Password anda salah']);
        }



    }
}

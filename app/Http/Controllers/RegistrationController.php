<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    private $user, $profile;

    function __construct() {
        $this->user = new User();
        $this->profile = new Profile();
    }

    public function index() {
        return view('registration');
        //return view('home');
        //echo 'Register Action'; die();
    }

    public function registrationAction(Request $req) {
        //echo $req->userType; die();

        $passwordHash = Hash::make($req->repassword);
        $this->user->username = $req->email;
        $this->user->password = $passwordHash;
        $this->user->user_type = $req->userType;
        $this->user->remember_token = 0;
        $this->user->status = rand('100000001','999999999');
        $this->user->save();
        $this->user->profile()->create([
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
        ]);
    }
}

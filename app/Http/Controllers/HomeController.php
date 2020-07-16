<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use DB;

class HomeController extends Controller
{
    protected $user, $profile;
    function __construct() {
        $this->user = new User();
        $this->profile = new Profile();
    }

    public function home(){
        //$data = DB::table('users')->get();
        return view('home');
    }

    public function register(){
        return view('register');
    }

    public function registerAction(){
        echo json_encode($_POST); die();
    }

    public function getUser(){
        /*$this->user->email = 'ari.azharr2@gmail.com';
        $this->user->phone = '082284703769';
        $this->user->user_type = 1;
        $this->user->password = 'Test1234!';
        $this->user->remember_token = 0;
        $this->user->status = rand('100000001','999999999');
        $this->user->save();
        $this->user->profile()->create([
            'first_name' => 'Ari',
            'last_name' => 'Azhar',
        ]);*/

    }
}

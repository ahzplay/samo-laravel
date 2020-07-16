<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegistrationVerifyEmail;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Exception;

class RegistrationController extends Controller
{
    private $user, $profile;

    function __construct() {
        $this->user = new User();
        $this->profile = new Profile();
    }

    public function index() {
        return view('registration');
    }

    public function registrationAction(Request $req) {
        $this->formValidation($req);
        $passwordHash = Hash::make($req->password);
        $verifiedToken = md5($req->email.now());
        if($this->checkDoubleUsermail($req->email)>0) {
            return redirect('/registration')->with(['warning' => 'Email sudah terdaftar']);
        }

        try{
            $this->user->username = $req->email;
            $this->user->password = $passwordHash;
            $this->user->user_type = $req->userType;
            $this->user->remember_token = 0;
            $this->user->email_verified_token = $verifiedToken;
            $this->user->status = rand('100000001','999999999');
            $this->user->save();
            $this->user->profile()->create();

            if($this->user->id > 0) {
                $paramEmailVerification = array(
                    'email' =>  $req->email,
                    'verifiedToken' => $verifiedToken,
                );
                $this->sendEmailVerification($paramEmailVerification);
                return redirect('/registration')->with(['success' => 'Registrasi berhasil, silahkan cek email anda untuk melakukan verifikasi']);
            } else {
                return redirect('/registration')->with(['warning' => 'Terdapat kesalahan, silahkan hubungi Support SAMO']);
            }
        } catch(Exception $e) {
            return redirect('/registration')->with(['warning' => '$e->getMessage()']);
        }

    }

    private function formValidation($req) {
        $this->validate($req,
            [
                'email' => 'required|email',
                'password' => 'min:6|required_with:repassword|same:repassword',
            ],
            [
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Format email tidak benar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 6 karakter',
                'password.same' => 'Password tidak sama dengan konfirmasi password',
            ]
        );
    }

    private function checkDoubleUsermail($email) {
        return $this->user->where('username',$email)->count();
    }

    public function registrationEmailVerification(Request $req){
        $email = base64_decode($req->email);
        $checkEmailAndToken = $this->user
                ->where('username', $email)
                ->where('email_verified_token', $req->verifiedToken)
                ->count();

        if($checkEmailAndToken > 0) {
           $this->user
               ->where('username', $email)
               ->update(['status'=>1,'email_verified_token'=>null]);
            return redirect('/samo')->with(['success' => 'VERIFIKASI BERHASIL, SELAMAT BERGABUNG DI SAMO']);
;
        } else {
            return abort(403, 'Terdapat kesalahan, pastikan anda mendapat email verifikasi dari SAMO.');
        }


    }

    public function sendEmailVerification($param=array()){
        try{
            Mail::to($param['email'])->send(new RegistrationVerifyEmail($param));
        } catch(Exception $e) {
            echo $e->getMessage();
        }

    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\ConfirmUsers;
use Illuminate\Support\Facades\Mail;
use Flash;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

//    use ResetsPasswords;
//
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }

    public function email(){

        return view('reset.email');
    }

    public function SendEmail(Request $request){

        $this->validate($request, [
            'email' => 'required|email|max:255',
        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            $email = $request['email'];
            $token = str_random(32);
            $model = new ConfirmUsers;
            $model->email = $email;
            $model->token = $token;
            $model->save();
//          $model = ConfirmUsers::where('email',$email)->update(['token' => $token]);
            Mail::send('reset.emails', ['token' => $token], function ($m) use($request) {
                $m->from('margaryanmgrigor@gmail.com', 'Facto');
                $m->to($request['email'])->subject('Email confirmation');
            });
            return redirect()->to('/your-email')->with(Session::flash('message_successfully', "Please check your email address"));
        }else{
            return redirect()->to('/your-email')->with(Session::flash('message_danger', "Please write the correct address"));

        }
    }

    public function confirm($token){
        $model = ConfirmUsers::where('token','=',$token)->firstOrFail();
        if($model){
            $model->delete();
            return redirect()->to('/reset-your-password');
        }
    }

    public function reset(){
        return view('reset.reset');
    }

    public function resetPassword(Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = User::where('email',$request->email)->update(['password' => bcrypt($request['password'])]);
        return redirect()->to('/login')->with(Session::flash('message_successfully', "You have successfully changed your password"));
    }
}

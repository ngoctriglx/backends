<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;


class ForgotPassword extends Controller
{
    public function postForgotPassword(Request $request)
    {
    	//Tạo token và gửi đường link reset vào email nếu email tồn tại
    	$user = User::where('email', $request->email)->first();
    	if($user){
    		// $resetPassword = ResetPassword::firstOrCreate(['email'=>$request->email, 'token'=>Str::random(60)]);
    		// $token = ResetPassword::where('email', $request->email)->first();
            // echo $link = url('resetPassword')."/".$token->token; //send it to email
            //////
            $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@=_&+-";
            $tocken = substr(str_shuffle($string), 0, 50);
            $user['remember_token'] = $tocken;
            $user->save();
            $link = url('forgotpassword')."/".$tocken;
            //////
            //$mail= "Nhập vào link để đặt lại mk ".$random;
            //echo $mail = $user->email;
            //echo $user;
            Mail::to('ngoctriqntest@gmail.com')->send(new MailNotify($link));

            // $data = array('name'=>"Blog du lịch");
            // $callback = function($message) {
            //     $message->to('ngoctriqntest@gmail.com')->subject('Mật khẩu mới');
            //     //$message->from('xyz@gmail.com','Virat Gandhi');
            // };
            // Mail::send(['text'=>$link], $data, $callback);
            //$user['password'] = $random;
            //$user->save();
            echo "gui xong";
            //return redirect()->route('home.get.index');
    	} else {
    		echo 'Email không có trong hệ thống, vui lòng kiểm tra lại';
    	}
    }   
}

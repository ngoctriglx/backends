<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class test extends Controller
{
    public function test(){
        // $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@=_&+-";
        // $random = substr(str_shuffle($string), 0, 60);
        // echo $random.'<br>';
        // echo $link = url('forgotpassword')."/".$random;
        $user = User::where('email', 'ngoctriqn5288@gmail.com')->first();
        $user['remember_token'] = 'he he';
        //$user->save();
        echo $user->updated_at;
        echo '<br>';
        echo "xong";
        echo '<br>';
        echo $user->email;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cache;
use App\admin;
use Auth;

class checkonline extends Controller
{
    public function userOnlineStatus()
    {
        //$users = DB::table('users')->get();
        $ad = Auth::guard('admin')->user();
        $id = $ad['id'];
        $admin = admin::find($id);
        $check = admin::all();
        // foreach ($check as $user) {
        //     if (Cache::has('user-is-online-' . $user->id))
        //         echo "User " . $user->fullname . " is online. <br>";
        //     else
        //         echo "User " . $user->fullname . " is offline.<br>.'--------'<br>.";
        // }
        foreach($check as $val){
            if($val->isOnline()){
                echo "User " . $val->fullname . " is online. <br>";
            }
			else		  	                
                echo "User " . $val->fullname . " is offline. <br>";
        }
        echo "<br>**************************<br>";
        echo $admin['id'];
        echo "<br>**************************<br>";
        if($check){
            if($check[0]->checkOnline($admin['id'])){
                echo "User " . $check[0]->fullname . " is online. <br>";
            }
            if(!$check[0]->checkOnline($admin['id'])){
                echo "User " . $check[0]->fullname . " is offline. <br>";
            }
        }

    }
}

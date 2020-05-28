<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function getList(){
        // $ad = Auth::guard('admin')->user();
        // $id = $ad['id'];
        // $admin = admin::find($id);
        // $check = admin::all();

        $user = User::all();
        $check = User::all();
        return view('admin.user.list',['user' => $user],compact('check'));
    }
}

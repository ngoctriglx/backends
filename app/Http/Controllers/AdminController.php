<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //login admin
    public function getLogin(){
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.get.index');
        }
        return view('admin.other.login');
    }
    public function postLogin(Request $request){

        $username = $request->username;
		$password = $request->password;
        $remember = $request->remember ? $request->remember : 0;

        if(Auth::guard('admin')->attempt(['username' => $username , 'password' => $password] , $remember)){
            // if($remember === 'on'){
            //     setcookie($username,rand(), time() + 10, '/', '127.0.0.1');
            // }
            return redirect()->route('admin.get.index');
        }
        else{
            return back()->with('error','Đăng nhập thất bại !');
        }
        
    }
    public function getIndex(){
        $admin = DB::table('admin')->count();
        $user = DB::table('users')->count();
        $cate = DB::table('category')->count();
        $new = DB::table('news')->count();
        $cmt = DB::table('comment')->count();
        $news = DB::table('news')->get();
        $sum = 0;
        foreach($news as $val){
            $sum += $val->view;
        }
        return view('admin.other.index',['admin' => $admin ,'user' => $user , 'cate' => $cate ,'new' => $new ,'cmt' => $cmt, 'sum' => $sum]);
        return view('admin.other.index');
    }
    public function getProfile(){
        $ad = Auth::guard('admin')->user();
        $id = $ad['id'];
        $admin = admin::find($id);
        $check = admin::all();
        $count = DB::table('news')->where('author2','=',$admin['username'])->count();
        //$news = DB::table('news')->where('author2','=',$admin['username'])->get();
        return view('admin.adminprofile.info',['admin' => $admin,'count' => $count ],compact('check'));
    }

    public function getEdit(){
        $ad = Auth::guard('admin')->user();
        $id = $ad['id'];
        $admin = admin::find($id);
        return view('admin.adminprofile.editinfo',['admin' => $admin]);
    }
    public function postEdit(Request $request){

        $ad = Auth::guard('admin')->user();
        $id = $ad['id'];
        $admin = admin::find($id);

        if($request -> hasFile('avatar')){
            $file = $request -> file('avatar');
            $fileType = $file -> getClientOriginalExtension('avatar');
            if($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg'){

                $AvatarName = 'avatar_'.$admin['username'].rand().'.'.$fileType;
                $file -> move('admin_layout/images/avatar-admin',$AvatarName);
                if(file_exists($admin['avatar'])){
                    unlink($admin['avatar']);
                    $admin['avatar'] = "";
                }
                $urlAvatar = 'admin_layout/images/avatar-admin/'.$AvatarName;
                $admin['avatar'] = $urlAvatar;
                
            }
            else{
                return back()->with("error","Phải là file ảnh (jpg , png ,jpeg)");
            }
        }

        $fullname = $request['fullname'];
        $age = $request['age'];
        $position = $request['position'];
        $email = $request['email'];
        $facebook = $request['facebook'];
        $status = $request['status'];

        $admin['fullname'] = $fullname;
        $admin['age'] = $age;
        $admin['position'] = $position;
        $admin['email'] = $email;
        $admin['facebook'] = $facebook;
        $admin['status'] = $status;
    
        $admin -> save();

        return redirect()->route('admin.info.get.profile');

    }
}

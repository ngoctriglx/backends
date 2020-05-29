<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\news;
use App\info;
use App\comment;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class HomeController extends Controller
{

    //home
    public function getIndex(){
        $new = DB::table('news')->orderBy('id', 'desc')->skip(0)->limit(5)->get();
        //$new = DB::table('news')->orderBy('id', 'desc')->get();
        return view('home.home',['new' => $new]);
    }
    public function getContent($tit){
    	$id = "";
        $new = DB::table('news')->where('changetitle','=',$tit)->get();
        foreach($new as $val){
            $id = $val->id;
            $n = news::find($id);    ///tăng lượt xem
            $n['view'] += 1;
            $n->save();
        }
        $cmt = DB::table('comment')->where('new_id','=',$id)->orderBy('id','desc')->get();
        $user = DB::table('info')->get();
        //return redirect()->route('home.get.content',['new' => $new , 'cmt' => $cmt , 'user' => $user]);
        return view('home.content',['new' => $new , 'cmt' => $cmt , 'user' => $user]);
    }
    public function postComment(Request $request , $new_id){
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $cmt = new comment;
            $cmt['user_id'] = $user_id;
            $cmt['new_id'] = $new_id;
            $cmt['content'] = $request['content'];
            $cmt->save();
            return back();
        }
        else{
            //return back()->with('phanquyen' , 'Bạn chưa đăng nhập !');
            return redirect()->route('home.get.login');
        }
    }
    public function postDeleteComment($id){
        $cmt = new comment;
        $cmt::destroy($id);
        return back();
    }
    public function postReportComment($id){
        if(Auth::check()){
        $cmt = comment::find($id);
        $cmt['report'] += 1;
        $cmt->save();
        return back();
        }
        else{
            return view('home.login');
        }
        
    }
    /////////login
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('home.get.index');
        }
        return view('home.login');
    }
    public function postLogin(Request $request){
        if(Auth::check()){
            return back();
        }
        $email = $request->email;
		$password = $request->password;

        if(Auth::attempt(['email' => $email , 'password' => $password])){
            return redirect()->route('home.get.index');
        }
        if(Auth::attempt(['username' => $email , 'password' => $password])){
            return redirect()->route('home.get.index');
        }
        else{
            return back()->with('error','Sai tên đăng nhập hoặc mật khẩu');
        }
        
    }
    /////////////Sigin
    public function getSigin(){
        // if(Auth::check()){
        //     return back();
        // }
        return view('home.sigin');
    }
    public function postSigin(Request $request){
        if(Auth::check()){
            return back();
        }
        $validator = Validator::make($request->all() , [
            'fullname' => 'required|max:50',
            'username' => 'required|min:6|max:30|unique:users,username',
            'password' => 'required|min:6|max:30',
            'repassword' => 'required|same:password'
        ] , [
            'fullname.required' => 'Vui lòng nhập tên của bạn !',
            'fullname.regex' => 'Tên phải là tiếng việt !',
            'fullname.max' => 'Độ dài tối đa 50 ký tự !',
            'username.required' => 'Vui lòng nhập tên tài khoản !',
            'username.min' => 'Tên tài khoản ít nhất 5 kí tự !',
            'username.unique' => 'Tên tài khoản đã tồn tại !',
            'username.regex' => 'Không có ký tự đặc biệt !',
            'username.max' => 'Độ dài tối đa 30 ký tự !',
            'password.required' => 'Vui lòng nhập mật khẩu !',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự !',
            'password.regex' => 'Không có ký tự đăt biệt !',
            'password.max' => 'Độ dài tối đa 30 ký tự !',
            'repassword.required' => 'Vui lòng nhập lại mật khẩu !',
            'repassword.same' => 'Mật khẩu nhập lại không khớp !'
        ]);
        if ($validator->fails()) {
            $request->flash('request',$request);
            return redirect()->back()->withErrors($validator)->withInput();
            // ->withErrors($validator)
        }
        else{
            $user = new User;
            $user['username'] = $request['username'];
            $user['password'] = bcrypt($request['password']);
            $user->save();
            $userid = $user->id;
            $info = new info;
            $info['user_id'] = $userid;
            $info['fullname'] = $request['fullname'];
            $info->save();
            //Auth::attempt(['username' => $request['username'] , 'password' => $request['password']]);
            //return redirect()->route('home.get.index');
            Auth::attempt(['username' => $request['username'] , 'password' => $request['password']]);
            return redirect()->route('home.get.index');

        //return redirect()->route('home.get.login')->with(['email' => $request['username'] , 'phanquyen' => 'Tạo tài khoản thành công !']);
        }

    }
    public function getLogout(){
        if(!Auth::check()){
            redirect()->route('home.get.index');
        }
        Auth::logout();
        return redirect()->route('home.get.index');
    }

    public function getEdit(){
        $id = Auth::user()->id;
        $user = DB::table('users')
        ->join('info', 'info.user_id', 'users.id')
        ->where('users.id',$id)->get();
        $a = $user[0];
        return view('home.editinfo',['val' => $a]);
    }

    public function postEdit(Request $request){

        $ad = Auth::user();
        $id = $ad['id'];
        $info = info::where('user_id',$id)->first();

        $fullname = $request['fullname'];
        $age = $request['age'];
        $facebook = $request['facebook'];

        $info['fullname'] = $fullname;
        $info['birth'] = $age;
        $info['facebook'] = $facebook;
    
        $info->save();

        //return redirect()->route('home.get.index')->with('phanquyen' ,'Cập nhật thông tin thành công !');
        return back()->with('phanquyen' ,'Cập nhật thông tin thành công !');
    }
    public function getChangePass(){
        return view('home.changepass');
    }
}

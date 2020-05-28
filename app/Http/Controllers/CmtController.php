<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\news;
use App\User;
use App\comment;
class CmtController extends Controller
{
    public function getList(){
        $cmt = DB::table('comment')->orderBy('id','desc')->get();
        $new = DB::table('news')->get();
        $user = DB::table('users')->get();
        return view('admin.cmt.list',['new' => $new , 'cmt' => $cmt , 'user' => $user]);
    }
    public function getDelete($id){
        DB::table('comment')->where('id', '=', $id)->delete();
        //return redirect()->route('admin.cmt.get.list');
        return back();
    }
    
}

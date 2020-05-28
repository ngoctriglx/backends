<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\cate;
use Auth;
use App\news;
use Illuminate\Support\Facades\DB; 


class NewController extends Controller
{
    //post
    public function getCreate(){

        $cate = cate::all();
        $auth = Auth::guard('admin')->user();
        $author = $auth['fullname'];
        return view('admin.new.create',['cate' => $cate , 'author' => $author ]);
    }

    public function postCreate(Request $request){

        $this -> validate($request,[
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            //'avatar' => 'required',
            'category' => 'required',
            'status' => 'required',
            'content' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập title',
            'description.required' => 'Vui lòng nhập description',
            'author.required' => 'Vui lòng nhập author',
            'avatar.required' => 'Vui lòng pick avatar',
            'category.required' => 'Vui lòng nhập category',
            'status.required' => 'Vui lòng nhập status',
            'content.required' => 'Vui lòng nhập content'
        ]);

        $title = $request['title'];
                $description = $request['description'];
                // $changetitle = changeTitle(trim($title));
                // $changetitle .= rand(10,10000000);
                $author = $request['author'];
                $category = $request['category']; 
                $status = $request['status'];
                $content = $request['content'];
                //
                $new = new news;
                $ad = Auth::guard('admin')->user();
                $id = $ad['id'];
                $admin = admin::find($id);
                $author2 = $admin['username'];
                $new['title'] = $title;
                //$new['changetitle'] = $changetitle;
                $new['description'] = $description;
                $new['author'] = $author;
                $new['author2'] = $author2;
                $new['category'] = $category;
                $new['status'] = $status;
                $new['content'] = $content;
               // $new['avatar'] = $urlAvatar;
                $new -> save();

                return redirect()->route('admin.new.get.list');
                //return back()->with("error","add thanh cong");

        // if($request -> hasFile('avatar')){
        //     $file = $request -> file('avatar');
        //     $fileType = $file -> getClientOriginalExtension('avatar');
        //     if($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg'){
        //         $title = $request['title'];
        //         $description = $request['description'];
        //         $changetitle = changeTitle(trim($title));
        //         $changetitle .= rand(10,10000000);
        //         $author = $request['author'];
        //         $category = $request['category'];
        //         $status = $request['status'];
        //         $content = $request['content'];
        //         //
        //         $new = new news;
        //         $ad = Auth::guard('admin')->user();
        //         $id = $ad['id'];
        //         $admin = admin::find($id);
        //         $author2 = $admin['username'];
        //         $new['title'] = $title;
        //         $new['changetitle'] = $changetitle;
        //         $new['description'] = $description;
        //         $new['author'] = $author;
        //         $new['author2'] = $author2;
        //         $new['category'] = $category;
        //         $new['status'] = $status;
        //         $new['content'] = $content;
        //         $new['avatar'] = $urlAvatar;
        //         $new -> save();

        //         return redirect()->route('admin.user.get.list');
        //     }
        //     else{
        //         return back()->with("error","Phải là file ảnh (jpg , png ,jpeg)");
        //     }
        // }
        // else{
        //     return back()->with("error","Bạn chưa chọn avatar");
        // }
    }
    public function getList(){
        //$new = DB::table('news')->get();
        $new = news::all();
        //return redirect('google.com');
        return view('admin.new.list',['new' => $new]);
    }

    public function getDelete($id){
        //DB::table('comment')->where('id', '=', $id)->delete();
        //return redirect()->route('admin.cmt.get.list');
        news::destroy($id);
        return back();
    }

    public function getEdit($id){
        $admin = Auth::guard('admin')->user();
        $adminLv = $admin['level'];
        if($adminLv == 1){
            $adminUsername = $admin['username'];
            $new = news::find($id);

            if($adminUsername != $new['author2']){
                return back()->with('phanquyen','Bạn không đủ thẩm quyền thực hiện hành động này !');
            }
        }

        $cate = cate::all();
        $new = news::find($id);
        $auth = Auth::guard('admin')->user();
        $author = $auth['fullname'];
        return view('admin.new.edit',['new' => $new ,'cate' => $cate , 'author' => $author]);
    }
    public function postEdit(Request $request , $id){

        // $admin = Auth::guard('admin')->user();
        // $adminLv = $admin['level'];
        // if($adminLv == 1){
        //     $adminUsername = $admin['username'];
        //     $new = news::find($id);

        //     if($adminUsername != $new['author2']){
        //         return back()->with('phanquyen','Bạn không đủ thẩm quyền thực hiện hành động này !');
        //     }
        // }

        $this -> validate($request,[
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'category' => 'required',
            'status' => 'required',
            'content' => 'required'
        ],[
            'title.required' => 'Vui lòng nhập title',
            'description.required' => 'Vui lòng nhập description',
            'author.required' => 'Vui lòng nhập author',
            'category.required' => 'Vui lòng nhập category',
            'status.required' => 'Vui lòng nhập status',
            'content.required' => 'Vui lòng nhập content'
        ]);

        $new = news::find($id);

        if($request -> hasFile('avatar')){
            $file = $request -> file('avatar');
            $fileType = $file -> getClientOriginalExtension('avatar');
            if($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg'){

                $AvatarName = 'avatar_'.$request['author'].rand().'.'.$fileType;
                $file -> move('admin_layout/images/avatar-new',$AvatarName);
                if(file_exists($new['avatar'])){
                    unlink($new['avatar']);
                    $new['avatar'] = "";
                }
                $urlAvatar = 'admin_layout/images/avatar-new/'.$AvatarName;
                $new['avatar'] = $urlAvatar;
                
            }
            else{
                return back()->with("error","Phải là file ảnh (jpg , png ,jpeg)");
            }
        }

        $title = $request['title'];
        $description = $request['description'];
        //$changetitle = changeTitle(trim($title));
        //$changetitle .= rand(10,10000000);
        $author = $request['author'];
        $category = $request['category'];
        $status = $request['status'];
        $content = $request['content'];

        $new['title'] = $title;
        //$new['changetitle'] = $changetitle;
        $new['description'] = $description;
        $new['author'] = $author;
        $new['category'] = $category;
        $new['status'] = $status;
        $new['content'] = $content;
    
        $new -> save();
        return redirect()->route('admin.new.get.list');

    }
}

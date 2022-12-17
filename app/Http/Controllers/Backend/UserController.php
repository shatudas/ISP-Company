<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function view()
    {
    	// $allData= User::all();
    	// dd($allData->toArray());
    	$data['allData'] =user::all();
    	return view('backend.user.view-user',$data);
    }

    public function add()
    {
    	return view('backend.user.add-user');
    }

    public function store(Request $Request)
    {
      $this->validate($Request,[
        'name'=>'required',
        'email'=>'required|unique:users,email'
      ]);

      $data= new User();
      $data->user_type=$Request->user_type;
      $data->name=$Request->name;
      $data->email=$Request->email;
      $data->password=bcrypt($Request->password);
      $data->save();
      return redirect()->route('user.view')->with('success','Data Insert Successfully');
      
    }

    public function edit($id)
    {
      $editData=user::find($id);
      return view('backend.user.edit-user',compact('editData'));
    }

    public function update(Request $Request,$id)
    {
     $this->validate($Request,[
        'name'=>'required',
        // 'email'=>'required|unique:users,email'
      ]);
     
     $data= user::find($id);
      $data->user_type=$Request->user_type;
      $data->name=$Request->name;
      $data->email=$Request->email;
      $data->password=bcrypt($Request->password);
      $data->save();
      return redirect()->route('user.view')->with('success','Data Updated Successfully');
    }




    public function delete($id)
    {
     $user= user::find($id);

     if(file_exists('public/upload/user_images' .$user->image) AND !empty($user->image))
     {
      unlink('public/upload/user_images' .$user->image);
     }



     $user->delete();
     return redirect()->route('user.view')->with('success','Data Deleted Successfully');
    } 

}

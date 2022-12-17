<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\model\slider;

class sliderController extends Controller
{
    public function view()
    {
    	$data['alldata'] = slider::all();
    	return view('backend.slider.view-slider',$data); 

    }

    public function add()
    {
    	return view('backend.slider.add-slider');
    }



    public function store(Request $Request)
    {
     
      $this->validate($Request,[
        'sl'=>'required',
        'status'=>'required',
        'image'=>'required'
      ]);


    	$data=new slider();
    	$data->sl = $Request->sl;
    	$data->title = $Request->title;
    	$data->status = $Request->status;
    	$data->created_by=Auth::user()->id;
    	if($Request->file('image'))
    	{
    		$file=$Request->file('image');
    		$filename=date('YmdHi').$file->getClientOriginalname();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$data['image']=$filename;
    	}
    	$data->save();
    	return redirect()->route('slider.view')->with('success','Data Insert Successfully');
    }




    public function edit($id)
    {
    	$editData=slider::find($id);
    	return view('backend.slider.edit-slider',compact('editData'));
    }


   public function update(Request $Request,$id)
   {
   $data=slider::find($id);
   $data->sl = $Request->sl;
   $data->title = $Request->title;
   $data->status = $Request->status;
   $data->updated_by=Auth::user()->id;
    if($Request->file('image'))
    {
    $file=$Request->file('image');
    @unlink(public_path('upload/slider_image'.$data->image));
    $filename=date('YmdHi').$file->getClientOriginalname();
    $file->move(public_path('upload/slider_image'),$filename);
    $data['image']=$filename;
   }
   $data->save();
   return redirect()->route('slider.view')->with('success','Data Updated Successfully');
   }



   public function delete($id)
   {
   $slider=slider::find($id);
   if(file_exists('public/upload/slider_image/'.$slider->image) AND !empty($slider->image)){
   	unlink('public/upload/slider_image/'.$slider->image);
   }
   $slider->delete();
   return redirect()->route('slider.view')->with('error','Data Deleted Successfully');
   }




   }

 
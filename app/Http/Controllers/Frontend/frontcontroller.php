<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\slider;

class frontcontroller extends Controller
{
    
    public function homepage()
    {
    	$data['sliders']=slider::all();
    	return view('frontEnd.home',$data);
    }
}

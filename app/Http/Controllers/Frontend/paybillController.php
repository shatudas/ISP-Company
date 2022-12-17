<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paybillController extends Controller
{
    public function paybillpage()
    {
    	return view('frontEnd.paybill');
    }
}

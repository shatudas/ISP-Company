<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dedicatedInternetController extends Controller
{
    public function dedicatedInternetpage()
    {
    	return view('frontEnd.dedicatedInternet');
    }
}

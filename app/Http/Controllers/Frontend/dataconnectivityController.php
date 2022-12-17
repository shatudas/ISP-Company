<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dataconnectivityController extends Controller
{
    public function dataconnectivitypage()
    {
    	return view('frontEnd.dataconnectivity');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hostController extends Controller
{
    public function hostpage()
    {
    	return view('frontEnd.hostingpage');
    }
}

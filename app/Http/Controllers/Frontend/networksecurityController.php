<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class networksecurityController extends Controller
{
    public  function networksecuritypage()
    {
    	return view('frontEnd.networksecurity');
    }
}

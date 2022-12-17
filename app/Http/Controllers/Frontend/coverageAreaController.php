<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class coverageAreaController extends Controller
{
   public function coverageAreapage()
    {
    	return view('frontEnd.coverageArea');
    }
}

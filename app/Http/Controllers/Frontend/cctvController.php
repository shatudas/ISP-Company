<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cctvController extends Controller
{
    public function CCTVSolutionpage()
    {
    	return view('frontEnd.cctvsolution');
    }
}

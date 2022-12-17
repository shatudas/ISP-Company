<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function teampage()
    {
    	return view ('frontEnd.team');
    }
}

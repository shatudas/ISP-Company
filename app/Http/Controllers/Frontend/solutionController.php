<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class solutionController extends Controller
{
    public function solitionpage()
    {
    	return view ('frontEnd.solution');
    }
}

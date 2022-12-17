<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class corporateInternetController extends Controller
{
    public function corporateInternetpage()
    {
    	return view ('frontEnd.corporateInternet');
    }
}

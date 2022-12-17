<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dataClientController extends Controller
{
    public function clientpage()
    {
    	return view('frontEnd.client_info');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class smeInternetController extends Controller
{
 public function smeInternetpage()
 {
 	return view('frontEnd.smeInternet');
 }
}

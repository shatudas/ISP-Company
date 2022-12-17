<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contuctController extends Controller
{
  public function contuctpage()
  {
   return view('frontEnd.contuctPage');
  }
}

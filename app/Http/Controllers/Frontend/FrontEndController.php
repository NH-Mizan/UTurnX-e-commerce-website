<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
  return view("frontEnd.layouts.pages.index");
    }
    
}

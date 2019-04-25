<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MusicApi;

class MusicApiController extends Controller
{


    public function index()
    {
     $bankholidays = MusicApi::all();
     return view('bankholiday-api.index',compact('bankholidays'));
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BankHoliday;

class BankHolidayController extends Controller
{
    
    public function index()
    {
     $bankholidays = BankHoliday::all();
     return view('bankholiday-api.index',compact('bankholidays'));
  }
}

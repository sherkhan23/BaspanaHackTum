<?php

namespace App\Http\Controllers;

use App\Models\Allzhk;
use Illuminate\Http\Request;

class AllzhkController extends Controller
{
    public function allData(){
       return view('allData' , ['data' => Allzhk::all()]);
    }

}

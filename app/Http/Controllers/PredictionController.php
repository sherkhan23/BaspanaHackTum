<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prediction;

class PredictionController extends Controller
{
    public function prediction(){
        return view("prediction");
    }
}

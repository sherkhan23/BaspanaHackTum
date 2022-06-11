<?php

namespace App\Http\Controllers;
use App\Models\Builder;
use App\Models\Cities;
use Illuminate\Http\Request;

class BuilderController extends Controller
{
    public function showBuilder(Request $request){
        $dataQuery = Builder::query();
        $builder = $dataQuery->paginate(9);
        $cities = Cities::all();
        return view('builder', compact('builder', 'cities'));
    }
}

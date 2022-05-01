<?php

namespace App\Http\Controllers;

use App\Models\Allzhk;
use Illuminate\Http\Request;

class AllzhkController extends Controller
{
    public function allData(){
       return view('allData' , ['data' => Allzhk::all()]);
    }

    public function getZhk( $cat,$zhk_id){
        $item = Allzhk::where('id', $zhk_id)->first();

        return view('ZHk.show', [
            'item' => $item
        ]);
    }

}

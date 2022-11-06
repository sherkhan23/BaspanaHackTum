<?php

namespace App\Http\Controllers;

use App\Filters\ZhkFilter;
use App\Models\Allzhk;
use App\Models\Category;
use App\Models\Cities;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function React\Promise\all;

class AllzhkController extends Controller
{
//    public function allData(){
//       return view('allData' , ['data' => Allzhk::all()]);
//    }

    public function allData(Request $request){
        //$data = Allzhk::filter($request)->paginate(9);
        $dataQuery = Allzhk::query();

        if ($request->filled('price_from')){
            $dataQuery->where('price', '>=', $request->price_from);
        }
        if ($request->filled('price_to')){
            $dataQuery->where('price', '<=', $request->price_to);
        }
        if ($request->filled('search_field')){
            $dataQuery->where('zhkName', 'LIKE', '%'.$request->search_field.'%');
        }

        $cities = Cities::all();
        $user = User::all();
//        $city_filter = DB::table('allzhks')
//            ->join('cities', 'allzhks.city', '=', 'cities.name')
//            ->select('city')
//            ->get();

//        if ($request->filled('city_id')){
//            $dataQuery->$city_filter = DB::table('allzhks')
//                ->join('cities', 'allzhks.city', '=', 'cities.name')
//                ->select('city')
//                ->get();
//        }

//        if ($request->filled('finish_year_2022')){
//            $dataQuery->where('finish_year', '>=', '01-01=2022'. $request->finish_year_2022);
//        }

//        if ($request->filled('sort-name')){
//            $dataQuery->orderBy('zhkName')->where('zhkName', $request->sort-name);
//        }


        $data = $dataQuery->paginate(9);
        return view('AllData', compact('data', 'cities', 'user'));


       // return view('allData' , ['data' => Allzhk::all()]);
    }




    public function getZhk( $cat, $zhk_id){
        $item = Allzhk::where('id', $zhk_id)->first();

        return view('zhk.show', [
            'item' => $item
        ]);
    }


    public function showCategory(Request $request, $cat_alias){

        $cat = Category::where('alias',$cat_alias )->first();

        if ($request->ajax()){
            return $request->orderBy;
        }
        return view('categories.index',[
            'cat' => $cat
            ]);
    }

}

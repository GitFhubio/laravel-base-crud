<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
  public function index(){
    // $beers= Beer::where('price','!=','4')->get();
    // $beers= Beer::where('brand', 'like', '%i')->get();
    // $beers= Beer::where('brand', 'like', '%i')->get();
    // $beers = Beer::where([['colour', '=', 'red'],
    // ['Strength', '=', 'strong'],])->get();
    $beers =Beer::whereBetween('price', [4, 5])->orderBy('price', 'desc')->get();
    // $beers = DB::table('beers')->groupBy('id')->having('colour', '=', 'red')->get();
    // dd($beers);
    // $b=Beer::where('price','!=','4')->limit(1)->get();
    return view('beers.index',compact('beers'));
  }

}

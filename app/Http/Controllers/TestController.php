<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class TestController extends Controller
{
  public function index(){
    // $beers= Beer::where('price','!=','4')->get();
    // $beers= Beer::where('brand', 'like', '%i')->get();
    // $beers= Beer::where('brand', 'like', '%i')->get();
    // $beers = Beer::where([['colour', '=', 'red'],
    // ['Strength', '=', 'strong'],])->get();
    $beers =Beer::whereBetween('price', [4, 5])->orderBy('price', 'desc')->get();
    // $beers = Beer::groupBy('colour')->having('price','>',4)->get();
    // dd($beers);
    // $b=Book::where('price','!=','9.50')->limit(1)->get();
    return view('beers.index',compact('beers'));
  }

}

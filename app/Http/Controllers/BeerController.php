<?php

namespace App\Http\Controllers;
use App\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $beers=Beer::all();
    //   dd($beers);
      return view('beers.index',compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request);
      // // la validazione si fa direttamente sulla Request
      $request->validate([
        'brand'=>'required|max:50',
        'colour'=>'required|in:pale,red,dark',
        'price'=>'required|numeric|between:0,9999.99',
        'materials'=>'required|max:250',
        'strength'=>'required|in:light,strong,normal',
        'fermentation'=>'required|in:low,high,natural',
        'cover'=>'required|url',
      ]);
      // questo se faccio submit fa parte di un oggetto illuminate
      // che descrive la chiamata http,quindi posso accedere al metodo,il chiamante etc,trovo request in request parameters

    // versione lunga
    // per prenderci tutti i parametri dalla form
    $data= $request->all();
    // dobbiamo creare nuovo oggetto (model)
    // $beer=new Beer();
    // $beer->brand = $data['brand'];
    // $beer->colour=$data['colour'];
    // $beer->save();
    // salva nel database
    // c'è un metodo corto
    $beer=new Beer();
    $beer->fill($data);
    $beer->save();
    // è meglio perche il controller non deve pensare alle proprietà
    $beerStored=Beer::orderBy('id','desc')->first();
    // non lo faccio col compact perche in realtà gli sto passando l'id
    return redirect()->route('beers.show',$beerStored);
    // return redirect()->route('beers.show',['beerStored'=>$beerStored->id]);
    // dd($beerStored);
    // return redirect()->route('beers.show',$beer);
    // return redirect()->route('beers.show',compact('beer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
      // gestisce gia lui se non è possibile trasformare intero in oggetto,allora id non esiste
      // fa una cosa simile al parseint,l'intero lo trasforma in un oggetto birra ,fa il parse oggettobook
    // prima c'era id al posto di beer come parametro
    // è piu parlante,altrimenti dovrei fare id->id nella vista
      // $beer = Beer::find($beer);
      // poi levo pure $beer
      return view('beers.show',compact('beer'));
      // visto che ho beer in compact
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

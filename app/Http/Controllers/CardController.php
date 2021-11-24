<?php

namespace App\Http\Controllers;

use App\Card;
use App\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::where('status',  0)->paginate(10);
        return view('backend.cards.index',compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offres = Offre::all();
        if($offres->count() > 0){
        return view('backend.cards.create',compact('offres'));
        }else{
            session()->flash('error', 'ajouter un offre d abord');                
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
            'offre_id' => 'required',
            'code' => 'required',
        ]);

        $codes = explode("\n",$request->code);
        $offre = Offre::FindOrFail($request->offre_id);

        foreach($codes as $code){
            $offre->update([
                'stock' => $offre->stock + 1
            ]);
            if($code == ""){

            }else{                
            Card::create([
                'offre_id' => $request->offre_id,
                'code'=> $code
            ]);
            }
        }
        session()->flash('success', 'Ajouter avec success');
        return redirect()->route('cards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        $offres = Offre::all();
        return view('backend.cards.edit', compact('offres','card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $request->validate( [
            'code' => 'required',
        ]);
        $card->update([
            'code' => $request->code
        ]);
        session()->flash('success', __('Modifier avec succés'));
        return redirect()->route('cards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $offre = Offre::FindOrFail($card->offre_id);
        $offre->update([
            'stock' => $offre->stock - 1
        ]);
        $card->delete();
        session()->flash('success', __('Supprimer avec succés'));
        return redirect()->route('cards.index');
    }
}

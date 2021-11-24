<?php

namespace App\Http\Controllers;

use App\Category;
use App\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::paginate(5);
        return view('backend.offres.index',compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if($categories->count() > 0){
            return view('backend.offres.create',compact('categories'));
        }else{
            session()->flash('error', 'ajouter un category d abord');                
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
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        $request_data = $request->all();
        Offre::create($request_data);
        session()->flash('success', 'Ajouter avec success');

        return redirect()->route('offres.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        $categories = Category::all();
        return view('backend.offres.edit', compact('categories','offre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        $request->validate( [
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        $request_data = $request->all();
        $offre->update($request_data);
        session()->flash('success', __('Modifier avec succés'));
        return redirect()->route('offres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        DB::table('cards')->where([['offre_id', $offre->id],['status', '=','0'],])->delete();
        $offre->delete();
        session()->flash('success', __('Supprimer avec succés'));
        return redirect()->route('offres.index');
    }
}

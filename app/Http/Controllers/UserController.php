<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users=User::where('role', 'writer')->when($request->search, function($q) use ($request){

            return $q->where('name', 'like', '%' . $request->search . '%')
            ->orWhere('id_c', 'like', '%' . $request->search . '%');
            ;

        })->latest()->paginate(15);

        return view('backend.clients.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.clients.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required',
            'poche' => 'required',
            'email' => 'required',
        ]);
        $request_data = $request->all();

        $user->update($request_data);
        session()->flash('success', __('Modifier avec succés'));
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {       
        $orders=DB::table('orders')->where('user_id', $user->id)->get();
        foreach($orders as $order){
            DB::table('offre_order')->where('order_id', $order->id)->delete();
        }
        
        DB::table('orders')->where('user_id', $user->id)->delete(); 
        $user->delete();
        session()->flash('success', __('Supprimer avec succés'));
        return redirect()->route('users.index');
    }
}

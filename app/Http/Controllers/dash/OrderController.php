<?php

namespace App\Http\Controllers\dash;

use App\Order;
use App\User;
use App\Card;
use App\Offre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders= Order::orderBy('id', 'DESC')->paginate(15);
        return view('backend.orders.index', compact('orders'));
    }
    public function show(User $user)
    {
        $offres_brk= Offre::all();        
        $orders= Order::where('user_id', $user->id)->orderBy('id', 'DESC')->paginate(15);
        $cartes = Card::where('user_id', $user->id)->get();
        return view('frontend.orders.index', compact('user','cartes','offres_brk','orders'));
    }
    public function destroy(Order $order)
    {
        
        $order->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('orders.index');
    
    }//end of order
}

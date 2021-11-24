<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Category;
use App\Offre;
use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(User $user, Category $category)
    {
        $orders = $user->orders()->with('offres')->paginate(5);
        return view('frontend.orders.create', compact( 'user', 'category', 'orders'));

    }//end of create

    public function store(Request $request, User $user)
    {
        
    }

    public function edit(User $user, Order $order)
    {
        //
    }

    public function update(Request $request, User $User, Order $order)
    {
        //
    }

    public function destroy(User $User, Order $order)
    {
        //
    }
 





}

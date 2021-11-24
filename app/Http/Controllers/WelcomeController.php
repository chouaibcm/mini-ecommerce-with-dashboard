<?php

namespace App\Http\Controllers;

use App\Category;
use App\Offre;
use App\User;
use App\Card;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }
    public function welcomeA()
    {
        $categories_count = Category::count();
        $offres_count = Offre::count();
        $users_count = User::count();
        $card_count = Card::where('status',0)->count();

        return view('backend.index',compact('categories_count', 'offres_count', 'users_count', 'card_count'));
    }


    public function contact()
    {
        return view('contact');
    }

    public function frontendindex()
    {
        $categories=Category::all();
        return view('frontend.index', compact('categories'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Item;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $cats = Cat::all();
        $items = Item::all();
        return view('welcome', compact('sliders', 'cats', 'items'));
    }
}

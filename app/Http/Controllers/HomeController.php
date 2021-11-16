<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Slider;


class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $categorys = Category::where('parent_id', 0)->get();
        return view('home.home', compact('sliders', 'categorys'));
    }

    public function test()
    {
        return view('test');
    }
}

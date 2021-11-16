<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Slider;


class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $categorys = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(6)->get(); //dung eloquent take de lay 6 feature product
        return view('home.home', compact('sliders', 'categorys', 'products'));
    }

    public function test()
    {
        return view('test');
    }
}

<?php

namespace App\Http\Controllers;

use App\Categories;
use App\CategoryItems;
use App\Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Categories::all();
        $barangs = Items::all();
        $category_items = CategoryItems::all();
        return view('pages.home',[
            'barangs' => $barangs,
            'categories' => $categories,
            'category_items' => $category_items
        ]);
    }
}

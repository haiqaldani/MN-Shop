<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\CategoryItems;
use App\Http\Controllers\Controller;
use App\Items;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $categories = Categories::count();
        $items = Items::count();
        $categoryitems = CategoryItems::count();
        return view('pages.admin.dashboard')->with(
            [
                'categories' => $categories,
                'items' => $items,
                'category_items' => $categoryitems

            ]
        );
    }
}

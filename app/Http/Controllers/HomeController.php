<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $currentBrowser = parent::checkBrowser($request);
        $categories = Category::all();

        return view('welcome', compact('currentBrowser', 'categories'));
    }
}

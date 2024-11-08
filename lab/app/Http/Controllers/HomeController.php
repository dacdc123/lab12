<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function max()
    {
        $category = DB::table('categories')
            ->get();
        $books = DB::table('books')
            ->orderBy('price', 'desc',)
            ->limit(10)
            ->get();
        $booked = DB::table('books')
            ->orderBy('price', 'asc')
            ->limit(10)
            ->get();
        return view('home', compact('books', 'booked', 'category'));
    }

}

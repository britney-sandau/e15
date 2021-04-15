<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function product($title)
    {
        return view('items/product', [
        'title' => $title
    ]);
    }
}

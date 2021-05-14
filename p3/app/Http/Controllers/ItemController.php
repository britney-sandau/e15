<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function items()
    {
        $items = Item::orderby('category')->get();

        return view('items/items', ['items'=> $items]);
    }

    public function info($slug)
    {
        $item = Item::where('slug', '=', $slug)->first();


        return view('/items/info', [
            'item'=> $item,
            ]);
    }

    public function help()
    {
        return view('help');
    }
}

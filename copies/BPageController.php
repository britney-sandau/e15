<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PageController extends Controller
{
    public function index()
    {
        return view('pages/welcome');
}

    // /**
    // *Get customer order
    // **/
    // public function order(Request $request)
    // {
    //     // $request->validate([
    //     //     'name' => 'required'
    //     // ]);

    //     $sandwich = $request->input('sandwich', null);
    //     $name = $request->input('name', null);
    //     $topping1 = $request->input('topping1', null);
    //     $topping2 = $request->input('topping2', null);
    //     $topping3 = $request->input('topping3', null);
    //     $topping4 = $request->input('topping4', null);
    //     $topping5 = $request->input('topping5', null);
    //     $topping6 = $request->input('topping6', null);
    //     $topping7 = $request->input('topping7', null);
    //     $topping8 = $request->input('topping8', null);
    //     $topping9 = $request->input('topping9', null);
    //     $email = $request->input('email', null);
    //     $tel = $request->input('tel', null);
    //     $notes = $request->input('notes', null);

    //     return view('/order', [
    //         'name' => $name,
    //         'sandwich' => $sandwich,
    //         'topping1' => $topping1,
    //         'topping2' => $topping2,
    //         'topping3' => $topping3,
    //         'topping4' => $topping4,
    //         'topping5' => $topping5,
    //         'topping6' => $topping6,
    //         'topping7' => $topping7,
    //         'topping8' => $topping8,
    //         'topping9' => $topping9,
    //         'email' => $email,
    //         'tel' => $tel,
    //         'notes' => $notes,

    //         ]);

    // }

    public function menu()
    {
        return view('/menu');
    }

    public function contact()
    {
        return view('/contact');
    }
}

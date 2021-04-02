<?php

# Will delete this page. It is a good example to see how blade forms work.
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $name = session('name', null);
        $sandwich = session('sandwich', null);
        $topping1 = session('topping1', null);
        $topping2 = session('topping2', null);
        $topping3 = session('topping3', null);
        $topping4 = session('topping4', null);
        $topping5 = session('topping5', null);
        $topping6 = session('topping6', null);
        $topping7 = session('topping7', null);
        $topping8 = session('topping8', null);
        $topping9 = session('topping9', null);
        $email = session('email', null);
        $tel = session('tel', null);
        $notes = session('notes', null);


        return view('/order', [
            'name' => $name,
            'sandwich' => $sandwich,
            'topping1' => $topping1,
            'topping2' => $topping2,
            'topping3' => $topping3,
            'topping4' => $topping4,
            'topping5' => $topping5,
            'topping6' => $topping6,
            'topping7' => $topping7,
            'topping8' => $topping8,
            'topping9' => $topping9,
            'email' => $email,
            'tel' => $tel,
            'notes' => $notes,
            ]);
    }

    public function show($title)
    {
        # TODO: Query the db where book title = $title
    }

    public function search($category, $subcategory)
    {
    }
}

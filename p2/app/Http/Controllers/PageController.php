<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Creates a session for the following variables.
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
        $notes = session('notes', null);

        // Returns the following to the home welcome page.
        return view('/welcome', [
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
            'notes' => $notes,
            ]);
    }

    public function menu()
    {
        return view('/menu');
    }

    public function contact()
    {
        return view('/contact');
    }
}

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
        // $items = [
        //     ['2021-04-01 21:05:16', '2021-04-01 21:05:16', 'username' => 'HoardingHarry', 'category' => 'clothing', 'description' => 'Vintage jeans. Levis and wranglers.', 'image' => 'https://hes-bookmark.s3.amazonaws.com/the-great-gatsby.jpg'],
        //     ['2021-04-01 21:05:16', '2021-04-01 21:05:16', 'username' => 'YardSaleSally', 'category' => 'furniture', 'description' => 'Bedroom set.', 'image' => 'https://hes-bookmark.s3.amazonaws.com/the-bell-jar.jpg'],
        //     ['2021-04-01 21:05:16', '2021-04-01 21:05:16', 'username' => 'TidyTom', 'category' => 'toys', 'description' => 'Barbies and hotwheels cars', 'image' => 'https://hes-bookmark.s3.amazonaws.com/i-know-why-the-caged-bird-sings.jpg'],
        //     ['2021-04-01 21:05:16', '2021-04-01 21:05:16', 'username' => 'JunkyardJoe', 'category' => 'exercise equipment', 'description' => 'Treadmill gently used. Can be used as a coat rack.', 'image' => 'https://hes-bookmark.s3.amazonaws.com/harry-pottern-and-the-philosophers-stone.jpg'],
        //     ['2021-04-01 21:05:16', '2021-04-01 21:05:16', 'username' => 'TrudysTreasureHunter', 'category' => 'miscellaneous', 'description' => 'Old lawn mower, still runs.', 'image' => 'https://hes-bookmark.s3.amazonaws.com/harry-potter-and-the-chamber-of-secrets.jpg'],
        //     ['2021-04-01 21:05:16', '2021-04-01 21:05:16', 'username' => 'FixerUpperFred', 'category' => 'furniture', 'description' => 'Comfy couch', 'image' => 'https://hes-bookmark.s3.amazonaws.com/harry-potter-and-the-prisoner-of-azkaban.jpg'],
        // ];

        // $itemData = file_get_contents(database_path('items.json'));

        // $items = json_decode($itemData, true);

        // $items = Arr::sort($items, function ($value) {
        //     return $value['category'];
        // });

        $items = Item::orderby('category')->get();

        return view('items/items', ['items'=> $items]);
    }

    public function info($slug)
    {
        //dump('This is the first example.');

        // $itemData = file_get_contents(database_path('items.json'));

        // $items = json_decode($itemData, true);

        // $item = Arr::first($items, function ($value, $key) use ($slug) {
        //     return $key == $slug;
        // });

        $item = Item::where('slug', '=', $slug)->first();


        return view('/items/info', [
            'item'=> $item,
            ]);
    }

    // public function display()
    // {
    //     return view('/items/details');
    // }

    public function help()
    {
        return view('help');
    }

    // public function login()
    // {
    //     return view('users/login');
    // }

    // public function signup()
    // {
    //     return view('users/signup');
    // }
}

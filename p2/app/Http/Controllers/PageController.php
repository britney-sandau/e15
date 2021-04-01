<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PageController extends Controller
{
    public function index()
    {
        return view('/welcome');
        
        // $orderResults = session('orderResults', null);
        // return view('welcome', ['orderResults' => $orderResults]);
    }

    /**
    *Get
    **/
    public function order(Request $request)
    {
        $sandwich = $request->input('sandwich', '');
        $name = $request->input('name', '');
        $topping1 = $request->input('topping1', '');
        $topping2 = $request->input('topping2', '');
        $topping3 = $request->input('topping3', '');
        $topping4 = $request->input('topping4', '');
        $topping5 = $request->input('topping5', '');
        $topping6 = $request->input('topping6', '');
        $topping7 = $request->input('topping7', '');
        $topping8 = $request->input('topping8', '');




        //$topping = $request->input('checkbox', '');
        //$topping = $request->input('topping', '');
        //$order = $request->all();
        //print_r($request->topping);
        //$topping1 = json_encode($request->topping1);
        //$searchResults = [$customerName, $sandwich, $str_json];
        //$searchResults = [];
        // dump($str_json);

        //return view('/order') . ('Hi ' . $customerName . ', your order of a ' . $sandwich . ' with ' . $topping . ' will be ready in 15 mins.');
        // return view('/order', ['name' => $name], ['sandwich' => $sandwich], ['topping[]' => $topping ?? '']);
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
            
            ]);

        //return redirect('/order')->with(['name' => $name]);
        //return view('/order') . ($str_json);
        //dump($customerName, $sandwich, $str_json);
        //return redirect('/')->with(['searchResults' => $searchResults]);
        //return redirect('/order')->with(['customerName', $customerName]);
        // session(['customerName', $customerName]);
        // return redirect('/order');
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

    // public function confirm(Request $request)
    // {
       

    // }


// class BookController extends Controller
// {


//     public function order($title)
//     {
//         # TODO: Query the db where book title = $title

//         $bookFound = false;

//         return view('books/show', [
//             'title' => $title,
//             'bookFound' => $bookFound,
//         ]);
//     }

//     public function search($category, $subcategory)
//     {
//         return "Search in: " .$category. ", " .$subcategory;
//     }
// }


// =====

// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Arr;

// class PageController extends Controller
// {
//     public function index()
//     {
//         $orderResults = session('orderResults', null);
//         return view('welcome', ['orderResults' => $orderResults]);
//     }



//     /**
//      * GET /order
//      * Show order being processed.
//      */
//     public function order(Request $request)
//     {
//         dump($request->all());
//         //return 'Process the order..';
//         //$orderResults = $request->all();
//         // session(['orderResults' => $orderResults]);
//         // session(['handoff' => $handoff]);

//         // return redirect('/')->with([
//         //     'handoff' => $handoff,
//         // 'sandwich' => $sandwich,
//         // 'cheese' => $cheese,
//         // 'tomato' => $tomato,
//         // 'lettuce' => $lettuce,
//         // 'pickles' => $pickles,
//         // 'onions' => $onions,
//         // 'sauce' => $sauce,
//         // 'ketchup' => $ketchup,
//         // 'mustard' => $mustard,
//         // 'notes' => $notes,
//         // 'name' => $name,
//         // 'email' => $email,
//         // 'tel' => $tel,
//         // ]);
//         return view('/order');
//     }

//     public function menu()
//     {
//         return view('/menu');
//     }

//     public function contact()
//     {
//         return view('/contact');
//     }
// }

//     // public function confirm(Request $request)
//     // {
       

//     // }


// // class BookController extends Controller
// // {


// //     public function order($title)
// //     {
// //         # TODO: Query the db where book title = $title

// //         $bookFound = false;

// //         return view('books/show', [
// //             'title' => $title,
// //             'bookFound' => $bookFound,
// //         ]);
// //     }

// //     public function search($category, $subcategory)
// //     {
// //         return "Search in: " .$category. ", " .$subcategory;
// //     }
// // }

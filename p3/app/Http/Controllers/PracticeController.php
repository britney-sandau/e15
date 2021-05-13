<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Item;
use Str;
use Illuminate\Support\Facades\Auth;


class PracticeController extends Controller
{
    /**
    * Practice example adding Item
    */

    public function practice4()
    {
        $item = new Item();
        $items = $item->where('category', 'LIKE', '%toys%')->get();

        if ($items->isEmpty()) {
            dump('No matches found');
        } else {
            foreach ($items as $item) {
                dump($item->category);
            }
        }
    }

    /**
     * Practice example adding Item
     */

    public function practice3()
    {
        $item = new Item();

        $item->slug = 'craftychris';
        $item->username = 'CraftyChris';
        $item->category = 'toys';
        $item->description = 'Baby toys in good condition.';
        $item->image = 'https://hes-bookmark.s3.amazonaws.com/the-great-gatsby.jpg';

        $item->save();

        dump('Added: ' . $item->username);

        // $item = Item::where('username', '=', 'CraftyChris')->get();
        // $item->delete();
        // dump('Item deleted.');
    }

    /**
     * Practice example using the Item Model
     */
    public function practice2()
    {
        dump(Item::find(3));
        dump(Item::all()->toArray());
    }

    /**
     * First practice example
     * GET /practice/1
     */
    public function practice1()
    {
        dump('This is the first example.');
    }

    /**
     * ANY (GET/POST/PUT/DELETE)
     * /practice/{n?}
     * This method accepts all requests to /practice/ and
     * invokes the appropriate method.
     */
    public function index($n = null)
    {
        $methods = [];

        # Load the requested `practiceN` method
        if (!is_null($n)) {
            $method = 'practice' . $n; # practice1

            # Invoke the requested method if it exists; if not, throw a 404 error
            return (method_exists($this, $method)) ? $this->$method() : abort(404);
        } # If no `n` is specified, show index of all available methods
        else {
            # Build an array of all methods in this class that start with `practice`
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'practice')) {
                    $methods[] = $method;
                }
            }

            # Load the view and pass it the array of methods
            return view('practice')->with(['methods' => $methods]);
        }
    }
}

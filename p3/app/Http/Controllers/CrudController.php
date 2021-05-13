<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

/**
    * I used a separate controller for my CRUD operations to keep better track of them.
    * I noticed the Bookmark page had something similar and I thought it made better sense.
    * my ItemController was getting rather long making things harder to find.
 */

class CrudController extends Controller
{
    public function add(Request $request)
    {
        return view('items/add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'username' => 'required|min:8|max:20|unique:items,username',
            'slug' => 'required|unique:items,slug',
            'category' => 'required|in:furniture,toys,clothing,exercise equipment,miscellaneous',
            'description' => 'required|min:2|max:255',
            'city' => 'required|min:2|max:100',
            'image' => 'required|url',
        ]);

        $item = new Item();

        $item->username = $request->username;
        $item->slug = $request->slug;
        $item->category = $request->category;
        $item->description = $request->description;
        $item->city = $request->city;
        $item->image = $request->image;

        $item->save();

    
        return redirect('/items/add')->with(['alert'=>'Your item has been posted to the Curb']);
    }

    public function list()
    {
        return view('items/list');
    }

    public function edit(Request $request, $slug)
    {
        $item = Item::where('slug', '=', $slug)->first();
        // $item = Item::findBySlug($slug);
        
        if (!$item) {
            return redirect('/items')->with(['alert' => 'Item not found']);
        }
        
        return view('items/edit', ['item' => $item]);
    }

    public function update()
    {
        $item = Item::where('slug', '=', $slug)->first();

        $request->validate([
            'username' => 'required|min:8|max:20|unique:items,username',
            'slug' => 'required|unique:items,slug'.$item->id.'|alpha_dash',
            'category' => 'required|in:val1,val2,val3,val4,val5',
            'description' => 'required|min:2|max:255',
            'city' => 'required|min:2|max:100',
            'image' => 'required|url',
        ]);

        $item->username = $request->username;
        $item->slug = $request->slug;
        $item->category = $request->category;
        $item->description = $request->description;
        $item->city = $request->city;
        $item->image = $request->image;
        $item->save();

        return redirect('/items/'.$slug.'/update')->with(['alert'=>'Your item has been updated']);
    }

    public function delete($slug)
    {
        $item = Item::findBySlug($slug);

        if (!$item) {
            return redirect('/items')->with([
                'alert' => 'Item not found'
            ]);
        }

        return view('items/delete', ['item' => $item]);
    }

    public function remove($slug)
    {
        $item = Item::findBySlug($slug);
        $item->delete();

        return redirect('/items')->with([
            'alert' => 'Your Curby has been removed.'
        ]);
    }
}

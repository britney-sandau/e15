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

    public function profile()
    {
        return view('items/profile');
    }

    public function edit(Request $request, $slug)
    {
        $item = Item::where('slug', '=', $slug)->first();
        
        
        if (!$item) {
            return redirect('/items')->with(['alert' => 'Item not found']);
        }
        
        return view('items/edit', ['item' => $item]);
    }

    public function update(Request $request, $slug)
    {
       
        $item = Item::findBySlug($slug);

        $request->validate([
            'username' => 'required',
            'slug' => 'required|unique:items,slug,'.$item->id.'|alpha_dash',
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

        return redirect('/items')->with(['alert'=>'Your item has been updated']);
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

    public function photo(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['profile_photo' => $filename]);
            
        }
       
        return redirect()->back();
    }
}

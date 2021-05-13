<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;

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
            'username' => 'required|min:8|max:20',
            // 'slug' => 'required',
            'category' => 'required|in:val1,val2,val3,val4,val5',
            'description' => 'required|min:2|max:255',
            'image' => 'required|url',
        ]);

        dump($request->all());
    }

    public function list()
    {
        return view('users/list');
    }

    public function update()
    {
        return view('items/update');
    }

    public function delete()
    {
        return view('items/delete');
    }
}

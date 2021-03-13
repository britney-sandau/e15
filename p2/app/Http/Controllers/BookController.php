<?php

# Will delete this page. It is a good example to see how blade forms work.
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        # TODO: Query the database for all the books;

        $books = [
            ['title' => 'War and Peace', 'author' => 'Leo Tolstoy'],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
            ['title' => 'I Know Why the Caged Bird Sings', 'author' => 'Maya Angelou'],
        ];
        return view('books/index', ['books' => $books]);
    }

    public function show($title)
    {
        # TODO: Query the db where book title = $title

        $bookFound = false;

        return view('books/show', [
            'title' => $title,
            'bookFound' => $bookFound,
        ]);
    }

    public function search($category, $subcategory)
    {
        return "Search in: " .$category. ", " .$subcategory;
    }
}

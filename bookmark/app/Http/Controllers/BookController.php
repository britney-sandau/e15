<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title', 'ASC')->get();

        // $newBooks = Book::orderBy('id', 'DESC')->limit(3)->get();
        $newBooks =$books->sortByDesc('id')->take(3);

        return view('books/index', ['books' => $books, 'newBooks' => $newBooks]);
    }
   
    /**
    * GET /books/create
    * Display the form to add a new book
    */
    public function create(Request $request)
    {
        return view('books/create');
    }


    /**
    * POST /books
    * Process the form for adding a new book
    */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:books,slug',
            'author' => 'required|max:255',
            'published_year' => 'required|digits:4',
            'cover_url' => 'required|url',
            'info_url' => 'required|url',
            'purchase_url' => 'required|url',
            'description' => 'required|min:100',
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->slug =$request->slug;
        $book->author = $request->author;
        $book->published_year = $request->published_year;
        $book->cover_url = $request->cover_url;
        $book->info_url = $request->info_url;
        $book->purchase_url = $request->purchase_url;
        $book->description = $request->description;
        $book->save();

        return redirect('/books/create')->with(['flash-alert' => 'Your book was added.']);

        # Code will eventually go here to add the book to the database,
        # but for now we'll just dump the form data to the page for proof of concept
        //dump($request->all());
    }
    /**
     * GET /search
     * Search books based on title or author
     */

    public function search(Request $request)
    {
        $request->validate([
            'searchTerms' => 'required',
            'searchType' => 'required'
        ]);

        # If validation fails, it will redirect back to '/'

        # Get form data
        $searchType = $request->input('searchType', 'title');
        $searchTerms = $request->input('searchTerms', '');

        # Do the search with keywords not exact term.
        $searchResults = Book::where($searchType, 'LIKE', '%'.$searchTerms.'%')->get();
        
        # Send user back to the homepage with results
        return redirect('/')->with([
            'searchResults' => $searchResults,
            ])->withInput();
    }

    /**
     * GET /books
     * Show all the books
     */
    // public function index()
    // {
    //     // Hard-coded books for practice:
    //     // $books = [
    //     //     ['title' => 'War and Peace', 'author' => 'Leo Tolstoy'],
    //     //     ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
    //     //     ['title' => 'I Know Why the Caged Bird Sings', 'author' => 'Maya Angelou'],
    //     // ];

    //     # Load our book data using PHP's file_get_contents
    //     # We specify our books.json file path using Laravel's database_path helper
    //     $bookData = file_get_contents(database_path('books.json'));
    
    //     # Convert the string of JSON text we loaded from books.json into an
    //     # array using PHP's built-in json_decode function
    //     $books = json_decode($bookData, true);

    //     # Alphabetize the books
    //     $books = Arr::sort($books, function ($value) {
    //         return $value['title'];
    //     });

    //     return view('books/index', ['books' => $books]);
    // }

    /**
     * GET /books/{slug}
     * Show the details for an individual book
     */
    public function show($slug)
    {

        // # Load our book data
        // # TODO: This code is redundant with loading the books in the index method
        // $bookData = file_get_contents(database_path('books.json'));
        // $books = json_decode($bookData, true);

        // # Narrow down our array of books
        // $book = Arr::first($books, function ($value, $key) use ($slug) {
        //     return $key == $slug;
        // });

        $book = Book::where('slug', '=', $slug)->first();
        
        return view('books/show', [
            'book' => $book,
        ]);
    }

    /**
     * GET /list
     */
    public function list()
    {
        # TODO
        return view('books/list');
    }

    /**
* GET /books/{slug}/edit
*/
    public function edit(Request $request, $slug)
    {
        $book = Book::where('slug', '=', $slug)->first();

        if (!$book) {
            return redirect('/books')->with(['flash-alert' => 'Book not found.']);
        }

        return view('books/edit', ['book' => $book]);
    }

    /**
    * PUT /books
    */
    public function update(Request $request, $slug)
    {
        $book = Book::where('slug', '=', $slug)->first();

        $request->validate([
        'title' => 'required',
        'slug' => 'required|unique:books,slug,'.$book->id.'|alpha_dash',
        'author' => 'required',
        'published_year' => 'required|digits:4',
        'cover_url' => 'url',
        'info_url' => 'url',
        'purchase_url' => 'required|url',
        'description' => 'required|min:255'
    ]);

        $book->title = $request->title;
        $book->slug = $request->slug;
        $book->author = $request->author;
        $book->published_year = $request->published_year;
        $book->cover_url = $request->cover_url;
        $book->info_url = $request->info_url;
        $book->purchase_url = $request->purchase_url;
        $book->description = $request->description;
        $book->save();

        return redirect('/books/'.$slug.'/edit')->with(['flash-alert' => 'Your changes were saved.']);
    }

    public function delete($slug)
    {
        $book = Book::findBySlug($slug);

        if (!$book) {
            return redirect('/books')->with([
                'flash-alert' => 'Book not found'
            ]);
        }

        return view('books/delete', ['book' => $book]);
    }

    public function destroy($slug)
    {
        $book = Book::findBySlug($slug);
        $book->delete();

        return redirect('/books')->with([
            'flash-alert' => ' ' . $book->title . ' was removed.'
            ]);
    }
}

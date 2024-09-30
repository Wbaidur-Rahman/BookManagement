<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo "From BookController";
        // $books = Book::take(30)->get();
        // $books = Book::whereBetween('price', [10, 200])->get();
        // $books = Book::where('price', '<' ,30)->get();
        // $books = Book::all();
        $books = Book::paginate(20);

        return view('books.index', ['books'=> $books]);
        // return view('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
       $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'author' => 'required',
            'isbn' => 'required|digits:13',
            'stock' => 'required|integer|min:0',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        // echo "Showing book info";
        $book = Book::find($id);
        return view('books.details', ['book'=> $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}

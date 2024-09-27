<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
    public function create()
{
    return view('books.create');
}
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    Book::create($request->all());

    return redirect()->route('books.index')->with('success', 'Libro creado exitosamente.');
}

}

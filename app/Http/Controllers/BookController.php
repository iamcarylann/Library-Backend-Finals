<?php

namespace App\Http\Controllers;

use App\Models\Book; // Import the Book model
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Retrieve all books
        $books = Book::all();

        return response()->json($books);
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
           'isbn' => 'required', 
           'published_at' => 'required',
            'quantity' => 'required',
        ]);

        // Create a new book
        $books = Book::create($validatedData);

        return response()->json($books, 201);
    }

    public function destroy($id)
    {
        $books = Book::findOrFail($id);
        $books->delete();
        return response()->json(null, 204);
    }
}

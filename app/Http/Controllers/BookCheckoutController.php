<?php

namespace App\Http\Controllers;

use App\Models\BookCheckout; // Import the BookCheckout model
use Illuminate\Http\Request;

class BookCheckoutController extends Controller
{
    // Fetch all book checkouts
    public function index()
    {
        return BookCheckout::with('user', 'book')->get();
    }

    // Store a new book checkout
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'checkout_date' => 'required',
            'due_date' => 'required',
            'returned_at' => '', // Adjust validation rules as needed
        ]);

        try {
            $bookCheckout = BookCheckout::create($validatedData);
            return response()->json($bookCheckout, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create book checkout'], 500);
        }
    }

    // Delete a book checkout by ID
    public function destroy($id)
    {
        try {
            $bookCheckout = BookCheckout::findOrFail($id);
            $bookCheckout->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete book checkout'], 500);
        }
    }
}

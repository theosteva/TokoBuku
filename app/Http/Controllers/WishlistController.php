<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
class WishlistController extends Controller
{
    public function index()
    {
        // We'll pass the books to the view and handle the wishlist display in JavaScript
        return view('pages.wishlist');
    }

    public function add(Request $request)
    {
        $bookId = $request->input('book_id');
        $book = Book::find($bookId);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Here we're assuming you're using session to store the wishlist
        // You might want to store this in the database for logged-in users
        $wishlist = $request->session()->get('wishlist', []);
        
        if (!in_array($bookId, $wishlist)) {
            $wishlist[] = $bookId;
            $request->session()->put('wishlist', $wishlist);
            return response()->json(['message' => 'Book added to wishlist'], 200);
        }

        return response()->json(['message' => 'Book already in wishlist'], 200);
    }

    public function remove(Request $request)
    {
        $bookId = $request->input('book_id');
        $user = Auth::user();

        $wishlist = Wishlist::where('user_id', $user->id)
                            ->where('book_id', $bookId)
                            ->first();

        if ($wishlist) {
            $wishlist->delete();
            return response()->json(['message' => 'Book removed from wishlist'], 200);
        }

        return response()->json(['message' => 'Book not found in wishlist'], 404);
    }

    public function getWishlist(Request $request)
    {
        $wishlistIds = $request->session()->get('wishlist', []);
        $books = Book::whereIn('id', $wishlistIds)->get();
        return response()->json($books);
    }
}
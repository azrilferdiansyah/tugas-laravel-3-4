<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    // GET /api/books → ambil semua buku
    public function index(): JsonResponse
    {
        return response()->json(Book::all(), 200);
    }

    // POST /api/books → tambah buku
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'author_id'      => 'required|exists:authors,id',
            'genre_id'       => 'required|exists:genres,id',
            'published_year' => 'nullable|integer',
            'isbn'           => 'required|string|unique:books,isbn',
            'summary'        => 'nullable|string',
            'is_active'      => 'boolean',
        ]);

        $book = Book::create($validated);

        return response()->json([
            'message' => 'Book berhasil ditambahkan',
            'data'    => $book,
        ], 201);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    // GET /api/books
    public function index(): JsonResponse
    {
        return response()->json(Book::all(), 200);
    }

    // POST /api/books
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

    // PUT / PATCH /api/books/{id}
    public function update(Request $request, Book $book): JsonResponse
    {
        $validated = $request->validate([
            'title'          => 'sometimes|required|string|max:255',
            'author_id'      => 'sometimes|required|exists:authors,id',
            'genre_id'       => 'sometimes|required|exists:genres,id',
            'published_year' => 'nullable|integer',
            'isbn'           => 'sometimes|required|string|unique:books,isbn,' . $book->id,
            'summary'        => 'nullable|string',
            'is_active'      => 'boolean',
        ]);

        $book->update($validated);

        return response()->json([
            'message' => 'Book berhasil diupdate',
            'data'    => $book,
        ], 200);
    }
}

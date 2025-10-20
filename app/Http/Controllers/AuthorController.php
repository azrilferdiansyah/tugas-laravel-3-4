<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AuthorController extends Controller
{
    // GET /api/authors → ambil semua data
    public function index(): JsonResponse
    {
        return response()->json(Author::all(), 200);
    }

    // POST /api/authors → tambah data baru
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'biography'   => 'nullable|string',
            'birth_year'  => 'nullable|integer',
            'nationality' => 'nullable|string|max:100',
        ]);

        $author = Author::create($validated);

        return response()->json([
            'message' => 'Author berhasil ditambahkan',
            'data'    => $author,
        ], 201);
    }

    // PUT / PATCH /api/authors/{id} → update data
    public function update(Request $request, Author $author): JsonResponse
    {
        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:100',
            'biography'   => 'nullable|string',
            'birth_year'  => 'nullable|integer',
            'nationality' => 'nullable|string|max:100',
        ]);

        $author->update($validated);

        return response()->json([
            'message' => 'Author berhasil diupdate',
            'data'    => $author,
        ], 200);
    }
}

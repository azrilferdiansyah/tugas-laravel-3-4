<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class GenreController extends Controller
{
    // GET /api/genres
    public function index(): JsonResponse
    {
        return response()->json(Genre::all(), 200);
    }

    // POST /api/genres
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'slug'        => 'required|string|unique:genres,slug',
            'description' => 'nullable|string',
            'is_active'   => 'boolean',
        ]);

        $genre = Genre::create($validated);

        return response()->json([
            'message' => 'Genre berhasil ditambahkan',
            'data'    => $genre,
        ], 201);
    }

    // PUT / PATCH /api/genres/{id}
    public function update(Request $request, Genre $genre): JsonResponse
    {
        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:100',
            'slug'        => 'sometimes|required|string|unique:genres,slug,' . $genre->id,
            'description' => 'nullable|string',
            'is_active'   => 'boolean',
        ]);

        $genre->update($validated);

        return response()->json([
            'message' => 'Genre berhasil diupdate',
            'data'    => $genre,
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();

        return response(['data' => $books ], 200);
    }

    public function store(BookRequest $request)
    {
        $book = Book::create($request->all());

        return response(['data' => $book ], 201);

    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return response(['data', $book ], 200);
    }

    public function update(BookRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return response(['data' => $book ], 200);
    }

    public function destroy($id)
    {
        Book::destroy($id);

        return response(['data' => null ], 204);
    }
}

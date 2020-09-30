<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCategoryRequest;
use App\BookCategory;

class BookCategoryController extends Controller
{
    public function index()
    {
        $bookcategories = BookCategory::latest()->get();

        return response(['data' => $bookcategories ], 200);
    }

    public function store(BookCategoryRequest $request)
    {
        $bookcategory = BookCategory::create($request->all());

        return response(['data' => $bookcategory ], 201);

    }

    public function show($id)
    {
        $bookcategory = BookCategory::findOrFail($id);

        return response(['data', $bookcategory ], 200);
    }

    public function update(BookCategoryRequest $request, $id)
    {
        $bookcategory = BookCategory::findOrFail($id);
        $bookcategory->update($request->all());

        return response(['data' => $bookcategory ], 200);
    }

    public function destroy($id)
    {
        BookCategory::destroy($id);

        return response(['data' => null ], 204);
    }
}

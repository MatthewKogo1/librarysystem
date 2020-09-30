<?php

namespace App\Http\Controllers;

use App\Http\Requests\LibraryUserRequest;
use App\LibraryUser;

class LibraryUserController extends Controller
{
    public function index()
    {
        $libraryusers = LibraryUser::latest()->get();

        return response(['data' => $libraryusers ], 200);
    }

    public function store(LibraryUserRequest $request)
    {
        $libraryuser = LibraryUser::create($request->all());

        return response(['data' => $libraryuser ], 201);

    }

    public function show($id)
    {
        $libraryuser = LibraryUser::findOrFail($id);

        return response(['data', $libraryuser ], 200);
    }

    public function update(LibraryUserRequest $request, $id)
    {
        $libraryuser = LibraryUser::findOrFail($id);
        $libraryuser->update($request->all());

        return response(['data' => $libraryuser ], 200);
    }

    public function destroy($id)
    {
        LibraryUser::destroy($id);

        return response(['data' => null ], 204);
    }
}

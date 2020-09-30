<?php

namespace App\Http\Controllers;

use App\Http\Requests\LendingRequest;
use App\Lending;

class LendingController extends Controller
{
    public function index()
    {
        $lendings = Lending::latest()->get();

        return response(['data' => $lendings ], 200);
    }

    public function store(LendingRequest $request)
    {
        $lending = Lending::create($request->all());

        return response(['data' => $lending ], 201);

    }

    public function show($id)
    {
        $lending = Lending::findOrFail($id);

        return response(['data', $lending ], 200);
    }

    public function update(LendingRequest $request, $id)
    {
        $lending = Lending::findOrFail($id);
        $lending->update($request->all());

        return response(['data' => $lending ], 200);
    }

    public function destroy($id)
    {
        Lending::destroy($id);

        return response(['data' => null ], 204);
    }
}

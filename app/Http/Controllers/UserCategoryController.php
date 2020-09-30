<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCategoryRequest;
use App\UserCategory;

class UserCategoryController extends Controller
{
    public function index()
    {
        $usercategories = UserCategory::latest()->get();

        return response(['data' => $usercategories ], 200);
    }

    public function store(UserCategoryRequest $request)
    {
        $usercategory = UserCategory::create($request->all());

        return response(['data' => $usercategory ], 201);

    }

    public function show($id)
    {
        $usercategory = UserCategory::findOrFail($id);

        return response(['data', $usercategory ], 200);
    }

    public function update(UserCategoryRequest $request, $id)
    {
        $usercategory = UserCategory::findOrFail($id);
        $usercategory->update($request->all());

        return response(['data' => $usercategory ], 200);
    }

    public function destroy($id)
    {
        UserCategory::destroy($id);

        return response(['data' => null ], 204);
    }
}

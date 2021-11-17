<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public  function getAll()
    {
        return Category::all();
    }

    public function getOne($id)
    {
        return Category::find($id)->items;
    }

    public function add(Request $request)
    {
        $item = new Category();
        $item->name = $request->name;
        $item->save();
        return response('OK');
    }
}

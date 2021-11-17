<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public  function getAll()
    {
        return Item::all();
    }

    public function getOne($id)
    {
        return Item::find($id)->adapter;
    }

    public function add(Request $request)
    {
        $item = new Item;
        $item->name = $request->name;
        $item->category_id = $request->category;
        $item->save();
        return response('OK');
    }
}

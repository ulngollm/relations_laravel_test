<?php

namespace App\Http\Controllers;

use App\Models\Adapter;
use Illuminate\Http\Request;

class AdapterController extends Controller
{
    public function getAll()
    {
        return Adapter::all();
    }

    public function getOne($id)
    {
        return Adapter::find($id);
    }
    public function getAdapterItem($id)
    {
        return Adapter::find($id)->item;
    }

    public function add(Request $request)
    {
        $item = new Adapter();
        $item->name = $request->name;
        $item->item_id = $request->item;
        $item->save();
        return response('OK');
    }
}

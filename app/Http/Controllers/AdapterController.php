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
        // делает ли обращение к связанной таблице еще 1 запрос к бд?
        // если да, то лучше join
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

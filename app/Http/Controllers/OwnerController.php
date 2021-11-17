<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function getAll()
    {
        return Owner::all();
    }
    public function getOne($id)
    {
        return Owner::find($id);
    }
    public function getItemsOfOne($id)
    {
        return Owner::find($id)->items;
    }
}

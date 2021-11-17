<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function adapter()
    {
        return $this->hasOne(Adapter::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function owners(){
        return $this->belongsToMany(Owner::class);
    }
}

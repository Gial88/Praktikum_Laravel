<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Inventory(){
        return $this->hasMany(Inventory::class);
    }
    use HasFactory;
}

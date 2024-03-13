<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Venta extends Model
{
    use HasFactory;

    protected $table = "ventas";

    public function products () : BelongsToMany
     {
        return $this->belongsToMany(Category::class);
    }
}

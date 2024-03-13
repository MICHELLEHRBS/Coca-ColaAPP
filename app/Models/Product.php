<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    public function category () : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = ['category_id'];



    public function ventas():  BelongsTo
    {
        return $this->belongsToMany(venta::class, );
    }

}

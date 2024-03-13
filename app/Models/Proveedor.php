<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = "proveedores";

    public function ventas () : HasMany{
        return $this->hasMany(Client::class);
    }

    protected $fillable = [
        'type',
    ];

}
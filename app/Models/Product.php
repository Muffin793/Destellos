<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="Products";

    public function Stock()
    {
        return $this->HasOne(Stocks::class);
    }

    public function Category()
    {
        return $this->belongsTo(Categgory::class);
    }

    public function Price()
    {
        return $this->HasOne(Price::class);
    }
    
}

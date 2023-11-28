<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="Categories";

    public function categorie():HasMany
    {
        return $this->HasMany(App\Models\Category::class);
    }
}

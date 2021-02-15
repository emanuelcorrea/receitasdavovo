<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\HowPrepare;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $primaryKey = 'id';

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function howPrepare()
    {
        return $this->hasMany(HowPrepare::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;

class HowPrepare extends Model
{
    use HasFactory;

    protected $table = 'recipe_how_prepares';

    protected $primaryKey = 'id';

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}

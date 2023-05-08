<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infracao extends Model
{
    use HasFactory;

    public function multas(): HasMany{
        return $this->hasMany(Multa::class);
    }
}

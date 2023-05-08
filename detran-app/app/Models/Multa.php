<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    use HasFactory;


    public function carro(): BelongTo{
        return $this->belongTo(Carro::class);
    }
    public function infracao(): BelongTo{
        return $this->belongTo(Infracao::class);
    }
}

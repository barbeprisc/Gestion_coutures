<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function Mesure()
    {
        return $this->hasOne(Mesure::class);
    }

    public function Payement()
    {
        return $this->hasOne(Payement::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    use HasFactory;
    public function Payement()
    {
        return $this->hasOne(Payement::class);
    }

    protected $guarded = [
        
    ];
}

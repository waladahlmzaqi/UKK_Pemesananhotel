<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    public function fasikamar()
    {
        return $this->hasMany(FasiKamar::class);
    }

    protected $table = 'kamars';
    protected $guarded = [];
}

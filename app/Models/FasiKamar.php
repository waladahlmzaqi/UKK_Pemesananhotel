<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasiKamar extends Model
{
    use HasFactory;

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
    protected $table = 'fasi_kamars';
    protected $guarded = [];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responden extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'responden';
    protected $fillable = [
        'kriteria_id', 
        'bobot'
    ];
}

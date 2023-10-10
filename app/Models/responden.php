<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responden extends Model
{
    use HasFactory;
    protected $table = 'responden';
    protected $fillable = [
        'siswa_nim',
        'guru_id',
        'kriteria_id', 
        'bobot'
    ];


    public function getGuru(){
        return $this->belongsTo(guru::class, 'guru_id', 'id');
    }

    public function getKriteria(){
        return $this->belongsTo(kriteria::class, 'kriteria_id', 'id');
    }
}

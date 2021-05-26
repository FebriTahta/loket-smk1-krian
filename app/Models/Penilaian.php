<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaians';
    protected $fillable = ['id','factor'];
    public $timestaps = false;

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}

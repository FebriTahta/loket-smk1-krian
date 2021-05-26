<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilais';
    protected $fillable = ['id','penilaian_id','nilai'];
    public $timestaps = false;

    public function penilaian()
    {
        return $this->belongsTo(Penilaian::class);
    }
}

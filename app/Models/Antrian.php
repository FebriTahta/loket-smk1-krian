<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    protected $table = 'antrians';
    protected $fillable = ['id','antrian_ke','loket_id','user_id','tanggal','status'];
    public $timestaps = false;
}

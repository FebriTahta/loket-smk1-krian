<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucapan extends Model
{
    protected $table = 'ucapans';
    protected $fillable = ['id','kata'];
    public $timestaps = false;
}

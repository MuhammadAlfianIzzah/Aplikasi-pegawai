<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $primaryKey = 'kode';
    public $incrementing = false;

    public $fillable = ["kode", "nama"];
    use HasFactory;
}

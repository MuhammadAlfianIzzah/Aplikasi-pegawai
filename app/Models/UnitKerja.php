<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    protected $fillable = ["nama", "tempat_tugas"];
    use HasFactory;
}

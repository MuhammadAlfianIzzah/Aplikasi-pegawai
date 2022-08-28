<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $primaryKey = 'nip';
    public $incrementing = false;

    protected $fillable = ["nip", "npwp", "nama", "tempat_lahir", "alamat", "tgl_lahir", "jenis_kelamin", "agama", "no_hp", "eselon", "foto", "jabatan_id", "gol_id", "unit_kerja_id"];
    use HasFactory;
}

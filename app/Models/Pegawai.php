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

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('nip', 'like', '%' . $search . '%')
                    ->orWhere('npwp', 'like', '%' . $search . '%')
                    ->orWhere('nama', 'like', '%' . $search . '%');
            });
        });
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, "jabatan_id");
    }
    public function golongan()
    {
        return $this->belongsTo(Golongan::class, "gol_id");
    }
    public function unit_kerja()
    {
        return $this->belongsTo(UnitKerja::class, "unit_kerja_id");
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nip" => "nullable|integer",
            "npwp" => "nullable",
            "nama" => "nullable",
            "tempat_lahir" => "nullable",
            "alamat" => "nullable",
            "tgl_lahir" => "nullable",
            "jenis_kelamin" => "nullable",
            "no_hp" => "nullable",
            "foto" => "nullable",
            "eselon" => "nullable",
            "agama" => "nullable",
            "gol_id" => "nullable",
            "jabatan_id" => "nullable",
            "unit_kerja_id" => "nullable"
        ];
    }
}

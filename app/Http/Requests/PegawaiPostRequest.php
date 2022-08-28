<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiPostRequest extends FormRequest
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
            "nip" => "required|unique:pegawais,nip|integer",
            "npwp" => "required|unique:pegawais,npwp",
            "nama" => "required",
            "tempat_lahir" => "required",
            "alamat" => "required",
            "tgl_lahir" => "required",
            "jenis_kelamin" => "required",
            "no_hp" => "required",
            "foto" => "required",
            "eselon" => "required",
            "agama" => "required",
            "gol_id" => "required",
            "jabatan_id" => "required",
            "unit_kerja_id" => "required"
        ];
    }
}

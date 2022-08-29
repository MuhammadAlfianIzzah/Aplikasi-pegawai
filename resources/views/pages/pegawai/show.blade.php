<x-admin-layout>
    <x-slot name="title">Hai saya {{ $pegawai->nama }}</x-slot>
    <p class="mt-n3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam, deserunt?</p>
    <div class="bg-white px-3 py-4">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img style="object-fit: cover" src="{{ asset("storage/$pegawai->foto") }}"
                        class="img-fluid rounded-start h-100 img-thumbnail" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pegawai->nama }}</h5>
                        <p>Alamat: {{ $pegawai->alamat }}</p>
                        <p class="card-text">
                            <small class="badge badge-info">NPWP / NIP / Eselon</small> {{ $pegawai->npwp }} |
                            {{ $pegawai->nip }} | {{ $pegawai->eselon }}
                        </p>
                        <div class="card mb-2">
                            <div class="card-body">
                                <p>Jabatan: {{ $pegawai->jabatan->nama }} || Golongan: {{ $pegawai->golongan->nama }}
                                </p>
                                <p>Unit Kerja: {{ $pegawai->unit_kerja->nama }} || Tugas Kerja:
                                    {{ $pegawai->unit_kerja->tempat_tugas }}
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <th scope="row">Tempat, Tanggal lahir</th>
                                            <td>{{ $pegawai->tempat_lahir }}, {{ $pegawai->tgl_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td>{{ $pegawai->jenis_kelamin == 'l' ? 'laki-laki' : 'Wanita' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Agama</th>
                                            <td>{{ $pegawai->agama }}</td>
                                        </tr>
                                    </tbody>
                                    <tr>
                                        <th scope="row">Nomor Handphone</th>
                                        <td>{{ $pegawai->no_hp }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

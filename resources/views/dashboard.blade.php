<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-white px-4 py-4">
        Halo selamat datang
        <div class="card mt-2">
            <div class="card-body">
                Tugas
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Login aplikasi <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('login') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Upload foto pegawai <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('pegawai') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Melihat daftar pegawai <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('pegawai') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Mampu melakukan pencarian data pegawai <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('pegawai') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Mampu untuk menampilkan seluruh daftar pegawai di dalam unit kerja
                        tertentu <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('unit_kerja') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Tambah data pegawai
                        <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('pegawai') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Ubah data pegawai <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('pegawai') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Hapus data pegawai <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('pegawai') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Cetak daftar pegawai <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('pegawai') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                    <li class="list-group-item">
                        Kolom yang disediakan sesuai hasil cetakan (sangat wajib)
                        <span class="badge text-bg-primary">Selesai</span>
                        <a href="{{ route('pegawai') }}" class="stretched-link">Hasil dapat dilihat</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-admin-layout>

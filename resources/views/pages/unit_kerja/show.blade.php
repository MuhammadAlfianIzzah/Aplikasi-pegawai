<x-admin-layout>
    <x-slot name="title">Unit Kerja {{ $unit_kerja->nama }}</x-slot>

    <div class="bg-white px-3 py-4">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{ $unit_kerja->code }}</h5>
                        <p>Nama: {{ $unit_kerja->nama }}</p>
                        <p>Dibuat pada {{ $unit_kerja->created_at }} | terakhir diupdate {{ $unit_kerja->updated_at }}
                        </p>
                        <h6>-- Daftar Pegawai dalam unit kerja --</h6>
                        <div class="row">
                            @foreach ($unit_kerja->pegawais as $pg)
                                <div class="col-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-text">{{ $pg->nama }} | {{ $pg->nip }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <x-slot name="title">Golongan {{ $golongan->nama }}</x-slot>

    <div class="bg-white px-3 py-4">
        <div class="card mb-3">
            <div class="row g-0">

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $golongan->code }}</h5>
                        <p>Nama: {{ $golongan->nama }}</p>
                        <p>Dibuat pada {{ $golongan->created_at }} | terakhir diupdate {{ $golongan->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

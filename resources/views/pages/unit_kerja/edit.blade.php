<x-admin-layout>
    <x-slot name="title">Edit unit_kerja</x-slot>

    <div class="bg-white py-4 px-4">
        <form action="{{ route('update-unit_kerja', [$unit_kerja->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" value="{{ $unit_kerja->nama ?? old('nama') }}" name="nama" class="form-control"
                    id="nama">
                @error('nama')
                    <span class="text-danger form-text">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="kode" class="form-label">Tempat Tugas</label>
                <input type="text" value="{{ $unit_kerja->tempat_tugas ?? old('tempat_tugas') }}" name="tempat_tugas"
                    class="form-control" id="tempat_tugas">
                @error('tempat_tugas')
                    <span class="text-danger form-text">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning">Update data</button>
            <a class="btn btn-dark" href="{{ route('unit_kerja') }}">Back</a>
        </form>
    </div>
</x-admin-layout>

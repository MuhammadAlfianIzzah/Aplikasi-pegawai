<x-admin-layout>
    <x-slot name="title">Edit golongan</x-slot>

    <div class="bg-white py-4 px-4">
        <form action="{{ route('update-golongan', [$golongan->kode]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" value="{{ $golongan->nama ?? old('nama') }}" name="nama" class="form-control"
                    id="nama">
                @error('nama')
                    <span class="text-danger form-text">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" value="{{ $golongan->kode ?? old('kode') }}" name="kode" class="form-control"
                    id="kode">
                @error('kode')
                    <span class="text-danger form-text">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning">Update data</button>
            <a class="btn btn-dark" href="{{ route('golongan') }}">Back</a>
        </form>
    </div>
</x-admin-layout>

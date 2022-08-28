<x-admin-layout>
    <x-slot name="title">Edit pegawai</x-slot>
    <div class="bg-white py-4 px-4">
        <form action="{{ route('update-pegawai', [$pegawai->nip]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" value="{{ $pegawai->nama ?? old('nama') }}" name="nama" class="form-control"
                    id="nama">
                @error('nama')
                    <span class="text-danger form-text">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
                @error('foto')
                    <span class="text-danger form-text">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="number" value="{{ $pegawai->no_hp ?? old('no_hp') }}" name="no_hp" class="form-control"
                    id="no_hp">
                @error('no_hp')
                    <span class="text-danger form-text">{{ $message }}</span>
                @enderror
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" value="{{ $pegawai->tempat_lahir ?? old('tempat_lahir') }}" id="tempat_lahir"
                        name="tempat_lahir" class="form-control" aria-label="tempat_lahir">
                    @error('tempat_lahir')
                        <span class="text-danger form-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="tgl_lahir"
                        value="{{ $pegawai->tgl_lahir ?? old('tgl_lahir') }}">
                    @error('tgl_lahir')
                        <span class="text-danger form-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="p"
                            {{ 'p' == old('jenis_kelamin', $pegawai->jenis_kelamin) ? 'selected' : '' }}>Perempuan
                        </option>
                        <option value="l"
                            {{ 'l' == old('jenis_kelamin', $pegawai->jenis_kelamin) ? 'selected' : '' }}>Laki laki
                        </option>
                    </select>
                    @error('jenis_kelamin')
                        <span class="text-danger form-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" id="agama" name="agama" value="{{ $pegawai->agama ?? old('agama') }}"
                        class="form-control" aria-label="agama">
                    @error('agama')
                        <span class="text-danger form-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-floating mb-2">
                <textarea class="form-control" placeholder="Leave a comment here" id="alamat" name="alamat" style="height: 100px">{{ $pegawai->alamat ?? old('alamat') }}</textarea>
                <label for="alamat">Alamat</label>
                @error('alamat')
                    <span class="text-danger form-text">{{ $message }}</span>
                @enderror
            </div>
            <div class="row mb-1">
                <div class="col">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" id="nip" name="nip" class="form-control"
                        value="{{ $pegawai->nip ?? old('nip') }}">
                    @error('nip')
                        <span class="text-danger form-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <label for="npwp" class="form-label">NPWP</label>
                    <input type="text" id="npwp" name="npwp" class="form-control"
                        value="{{ $pegawai->npwp ?? old('npwp') }}">
                    @error('npwp')
                        <span class="text-danger form-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <label for="eselon" class="form-label">eselon</label>
                    <input type="text" id="eselon" name="eselon" class="form-control"
                        value="{{ $pegawai->eselon ?? old('eselon') }}">
                    @error('eselon')
                        <span class="text-danger form-text">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Update data</button>
            <a class="btn btn-dark" href="{{ route('pegawai') }}">Back</a>
        </form>
    </div>
</x-admin-layout>

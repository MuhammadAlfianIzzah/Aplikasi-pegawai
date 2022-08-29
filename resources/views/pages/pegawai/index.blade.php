<x-admin-layout>
    <x-slot name="title">
        Halaman kelola pegawai
    </x-slot>
    {{-- {{ dd($pegawai) }} --}}

    <div class="row py-4">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahpegawai">
                <i class="fa-solid fa-plus"></i> Tambah
            </button>

            <a href="{{ route('cetak-pegawai') }}" class="btn btn-success"> <i class="fa-solid fa-file-pdf"></i> Cetak</a>
        </div>
        <div class="col-6">
            <form action="" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control border-0 small" placeholder="Search for name|npwp|nip..."
                        aria-label="Search" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="bg-white px-3 py-4">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nip</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Unit kerja</th>
                    <th scope="col">Eselon</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $key => $pg)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $pg->nip }}</td>
                        <td>{{ $pg->nama }}</td>
                        <td>{{ $pg->unit_kerja->nama }}</td>
                        <td>{{ $pg->eselon }}</td>
                        <td>
                            <img style="width: 100px" src="{{ asset("storage/$pg->foto") }}" alt="">
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('show-pegawai', [$pg->nip]) }}" class="btn btn-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('edit-pegawai', [$pg->nip]) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('delete-pegawai', [$pg->nip]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        onclick="return confirm('Anda yakin akan menghapus data pegawai {{ $pg->nip }}')"
                                        class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pegawais->links() }}
    </div>
    @if ($errors->any())
        {{-- {{ dd($errors) }} --}}
        @push('script')
            <script>
                $(document).ready(function() {
                    $('#tambahpegawai').modal('show');
                });
            </script>
        @endpush
    @endif
    <!-- Modal -->
    <div class="modal fade" id="tambahpegawai" tabindex="-1" aria-labelledby="tambahpegawaiLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('store-pegawai') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahpegawaiLabel">Tambah Pegawai</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" value="{{ old('nama') }}" name="nama" class="form-control"
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
                            <input type="number" value="{{ old('no_hp') }}" name="no_hp" class="form-control"
                                id="no_hp">
                            @error('no_hp')
                                <span class="text-danger form-text">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" value="{{ old('tempat_lahir') }}" id="tempat_lahir"
                                    name="tempat_lahir" class="form-control" aria-label="tempat_lahir">
                                @error('tempat_lahir')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"
                                    placeholder="tgl_lahir" value="{{ old('tgl_lahir') }}">
                                @error('tgl_lahir')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="l">Laki laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" id="agama" name="agama" value="{{ old('agama') }}"
                                    class="form-control" aria-label="agama">
                                @error('agama')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-floating mb-2">
                            <textarea class="form-control" placeholder="Leave a comment here" id="alamat" name="alamat"
                                style="height: 100px">{{ old('alamat') }}</textarea>
                            <label for="alamat">Alamat</label>
                            @error('alamat')
                                <span class="text-danger form-text">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row mb-1">
                            <div class="col">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" id="nip" name="nip" class="form-control"
                                    value="{{ old('nip') }}">
                                @error('nip')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="npwp" class="form-label">NPWP</label>
                                <input type="text" id="npwp" name="npwp" class="form-control"
                                    value="{{ old('npwp') }}">
                                @error('npwp')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="eselon" class="form-label">eselon</label>
                                <input type="text" id="eselon" name="eselon" class="form-control"
                                    value="{{ old('eselon') }}">
                                @error('eselon')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="jabatan_id" class="form-label">Jabatan</label>
                                <select class="form-select" id="jabatan_id" name="jabatan_id">
                                    @foreach ($jabatans as $jb)
                                        <option value="{{ $jb->id }}">{{ $jb->nama }}</option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="gol_id" class="form-label">Golongan</label>
                                <select class="form-select" id="gol_id" name="gol_id">
                                    @foreach ($golongans as $gol)
                                        <option value="{{ $gol->kode }}">{{ $gol->nama }}</option>
                                    @endforeach
                                </select>
                                @error('gol_id')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="unit_kerja_id" class="form-label">Unit kerja</label>
                                <select class="form-select" id="unit_kerja_id" name="unit_kerja_id">
                                    @foreach ($unit_kerjas as $uk)
                                        <option value="{{ $uk->id }}">{{ $uk->nama }}</option>
                                    @endforeach
                                </select>
                                @error('unit_kerja_id')
                                    <span class="text-danger form-text">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </form>
        </div>
    </div>
</x-admin-layout>

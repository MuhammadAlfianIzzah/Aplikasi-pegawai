<x-admin-layout>
    <x-slot name="title">
        Halaman kelola Golongan
    </x-slot>
    {{-- {{ dd($golongan) }} --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahgolongan">
        <i class="fa-solid fa-plus"></i> Tambah
    </button>
    <div class="bg-white px-3 py-4">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($golongans as $key => $gl)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $gl->kode }}</td>
                        <td>{{ $gl->nama }}</td>

                        <td>
                            <div class="btn-group" role="group">
                                {{-- <a href="{{ route('show-golongan', [$gl->kode]) }}" class="btn btn-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a> --}}
                                <a href="{{ route('edit-golongan', [$gl->kode]) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('delete-golongan', [$gl->kode]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        onclick="return confirm('Anda yakin akan menghapus data golongan {{ $gl->nip }}')"
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
        {{ $golongans->links() }}
    </div>
    @if ($errors->any())
        @push('script')
            <script>
                $(document).ready(function() {
                    $('#tambahgolongan').modal('show');
                });
            </script>
        @endpush
    @endif
    <!-- Modal -->
    <div class="modal fade" id="tambahgolongan" tabindex="-1" aria-labelledby="tambahgolonganLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('store-golongan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahgolonganLabel">Tambah golongan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="kode" class="form-label">kode</label>
                            <input type="text" value="{{ old('kode') }}" name="kode" class="form-control"
                                id="kode">
                            @error('kode')
                                <span class="text-danger form-text">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" value="{{ old('nama') }}" name="nama" class="form-control"
                                id="nama">
                            @error('nama')
                                <span class="text-danger form-text">{{ $message }}</span>
                            @enderror
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

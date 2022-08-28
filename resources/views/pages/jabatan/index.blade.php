<x-admin-layout>
    <x-slot name="title">
        Halaman kelola jabatan
    </x-slot>
    {{-- {{ dd($jabatan) }} --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahjabatan">
        <i class="fa-solid fa-plus"></i> Tambah
    </button>
    <div class="bg-white px-3 py-4">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jabatans as $key => $jb)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $jb->nama }}</td>

                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('edit-jabatan', [$jb->id]) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('delete-jabatan', [$jb->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        onclick="return confirm('Anda yakin akan menghapus data jabatan {{ $jb->nip }}')"
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
        {{ $jabatans->links() }}
    </div>
    @if ($errors->any())
        @push('script')
            <script>
                $(document).ready(function() {
                    $('#tambahjabatan').modal('show');
                });
            </script>
        @endpush
    @endif
    <!-- Modal -->
    <div class="modal fade" id="tambahjabatan" tabindex="-1" aria-labelledby="tambahjabatanLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('store-jabatan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahjabatanLabel">Tambah jabatan</h5>
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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </form>
        </div>
    </div>
</x-admin-layout>

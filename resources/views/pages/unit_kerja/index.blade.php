<x-admin-layout>
    <x-slot name="title">
        Halaman kelola Unit Kerja
    </x-slot>
    {{-- {{ dd($unit_kerja) }} --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahunit">
        <i class="fa-solid fa-plus"></i> Tambah
    </button>
    <div class="bg-white px-3 py-4">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Tugas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($unit_kerjas as $key => $uk)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $uk->nama }}</td>
                        <td>{{ $uk->tempat_tugas }}</td>

                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('show-unit_kerja', [$uk->id]) }}" class="btn btn-primary">
                                    <i class="fa-solid fa-arrows-down-to-people"></i>
                                </a>
                                <a href="{{ route('edit-unit_kerja', [$uk->id]) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <form action="{{ route('delete-unit_kerja', [$uk->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        onclick="return confirm('Anda yakin akan menghapus data unit_kerja {{ $uk->id }}')"
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
        {{ $unit_kerjas->links() }}
    </div>
    @if ($errors->any())
        @push('script')
            <script>
                $(document).ready(function() {
                    $('#tambahunit').modal('show');
                });
            </script>
        @endpush
    @endif
    <!-- Modal -->
    <div class="modal fade" id="tambahunit" tabindex="-1" aria-labelledby="tambahunitLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form action="{{ route('store-unit_kerja') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahunitLabel">Tambah unit_kerja</h5>
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
                        <div class="mb-2">
                            <label for="tempat_tugas" class="form-label">Tempat Tugas</label>
                            <input type="text" value="{{ old('tempat_tugas') }}" name="tempat_tugas"
                                class="form-control" id="tempat_tugas">
                            @error('tempat_tugas')
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

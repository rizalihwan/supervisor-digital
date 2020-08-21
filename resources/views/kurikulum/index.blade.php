@extends('layouts.app', ['title' => 'PageKurikulum'])
@section('content')
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('jadwal.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="hr">Jadwal Hari :</label>
                                    <select name="hari" id="hr" class="form-control">
                                        @foreach ($day as $hari)
                                            <option value="{{ $hari }}">{{ $hari }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ng">Pilih Guru :</label>
                                    <input type="text" name="nama_guru" id="ng" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="mp">Mata Pelajaran :</label>
                                    <input type="text" name="mapel" id="mp" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- For Notification success --}}
    @include('layouts.partials.alert')
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-light">
                        <tr style="background: gray; color: #ffffff;">
                            <th>#</th>
                            <th>Jadwal Hari</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration + $data->firstItem() - 1 . '.'}}</td>
                                <td>{{ $row->hari }}</td>
                                <td>{{ $row->nama_guru }}</td>
                                <td>{{ $row->mapel }}</td>
                                <td>
                                    <form action="{{ route('jadwal.destroy', $row->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-danger text-center">Data Kosong!</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

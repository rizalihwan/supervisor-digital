@extends('layouts.app', ['title' => 'PageGuru'])
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
                        <h5 class="modal-title" id="exampleModalLabel">Upload Guru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('guru.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="form-group">
                                    <label for="fel">Masukan File :</label>
                                    <input type="file" name="file" id="fel" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="mpl">Mata Pelajaran :</label>
                                    <input type="text" class="form-control" name="mapel" id="mpl" required>
                                </div>
                                <input type="hidden" name="status" value="0">
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
                            <th>Nama Guru</th>
                            <th>Mapel</th>
                            <th>Status</th>
                            <th>Diunggah Pada</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration + $data->firstItem() - 1 . '.'}}</td>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->mapel }}</td>
                                <td>
                                    @if ($row->status == 0)
                                        <span class="badge badge-danger">{{ 'Belum Dikonfirmasi' }}</span>
                                    @endif
                                    @if ($row->status == 1)
                                        <span class="badge badge-success">{{ 'Lulus Penilaian' }}</span>
                                    @endif
                                    @if ($row->status == 2)
                                        <span class="badge badge-warning">{{ 'Belum Lulus' }}</span>
                                    @endif
                                </td>
                                <td>{{ $row->created_at->format('d F, Y') . ' ' . $row->created_at->diffForHumans() }}</td>
                                <td>
                                    <form action="{{ route('guru.destroy', $row->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></button>
                                        {{-- end validate --}}
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-danger text-center">Data Kosong!</td>
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

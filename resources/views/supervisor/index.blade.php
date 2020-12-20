@extends('layouts.app', ['title' => 'PageSupervisor'])
@section('content')
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-light">
                        <tr style="background: gray; color: #ffffff;">
                            <th>#</th>
                            <th>Nama Guru</th>
                            <th>Materi</th>
                            <th>Status</th>
                            <th>Diunggah Pada</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration + $data->firstItem() - 1 . '.' }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td><a href="{{ asset('files/' . $row->file) }}" rel="noopener noreferrer" target="_blank">Lihat Materi</a></td>
                                <td>
                                    @if ($row->status == 0)
                                        <span class="badge badge-warning">{{ 'Belum Dikonfirmasi' }}</span>
                                    @endif
                                    @if ($row->status == 1)
                                        <span class="badge badge-success">{{ 'Lulus Penilaian' }}</span>
                                    @endif
                                    @if ($row->status == 2)
                                        <span class="badge badge-danger">{{ 'Tidak Lulus' }}</span>
                                    @endif
                                </td>
                                <td>{{ $row->created_at->format('d F, Y') . ' ' . $row->created_at->diffForHumans() }}</td>
                                <td>
                                    <form action="{{ route('supervisor.lulus', $row->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success">Lulus</button>
                                    </form>
                                    <form action="{{ route('supervisor.Tidaklulus', $row->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger">Tidak Lulus</button>
                                    </form>
                                </td>
                                {{-- <td><a href="{{ route('supervisor.edit', $row->id) }}">Beri Nilai</a></td> --}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-danger text-center">Data Kosong!</td>
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

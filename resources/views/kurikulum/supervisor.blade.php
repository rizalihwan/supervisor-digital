@extends('layouts.app', ['title' => 'PageKurikulum'])
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
                            <th>Mapel</th>
                            <th>Status</th>
                            <th>Diunggah Pada</th>
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

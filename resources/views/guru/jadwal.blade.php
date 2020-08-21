@extends('layouts.app', ['title' => 'PageGuru'])
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
                            <th>Jadwal Hari</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                        </tr>
                        @forelse ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration + $data->firstItem() - 1 . '.'}}</td>
                                <td>{{ $row->hari }}</td>
                                <td>{{ $row->nama_guru }}</td>
                                <td>{{ $row->mapel }}</td>
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

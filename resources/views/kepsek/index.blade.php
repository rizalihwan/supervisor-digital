@extends('layouts.app', ['title' => 'PageKepsek'])
@section('content')
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('kepsek.laporan') }}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2"><i class="fas fa-download fa-sm text-white-50"></i> Cetak PDF</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-light">
                        <tr style="background: gray; color: #ffffff;">
                            <th>Jadwal Hari</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                        </tr>
                        @forelse ($data as $row)
                            <tr>
                                <td>{{ $row->hari }}</td>
                                <td>{{ $row->nama_guru }}</td>
                                <td>{{ $row->mapel }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-danger text-center">Laporan Kosong!</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

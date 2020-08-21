@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')
    @if (Auth::user()->role == 'guru')
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center"><h4>Petunjuk Penggunaan Aplikasi</h4></div>
                        <div class="form-group py-3 ml-2">
                            <h5>1. Guru hanya diberi akses untuk meng upload tugas saja.</h5>
                            <h5>2. Jika ingin mendaftarkan akun guru lain silahkan menuju menu register.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Auth::user()->role == 'supervisor')
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center"><h4>Petunjuk Penggunaan Aplikasi</h4></div>
                        <div class="form-group py-3 ml-2">
                            <h5>1. Supervisor hanya diberi akses untuk menilai upload file dari guru.</h5>
                            <h5>2. Jika ingin mendaftarkan akun supervisor lain silahkan menuju menu register.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Auth::user()->role == 'kurikulum')
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center"><h4>Petunjuk Penggunaan Aplikasi</h4></div>
                        <div class="form-group py-3 ml-2">
                            <h5>1. Kurikulum hanya diberi akses untuk membuat Jadwal yang berasal dari pemilihan supervisor.</h5>
                            <h5>2. Jika ingin mendaftarkan akun supervisor lain silahkan menuju menu register.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Auth::user()->role == 'kepsek')
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center"><h4>Petunjuk Penggunaan Aplikasi</h4></div>
                        <div class="form-group py-3 ml-2">
                            <h5>1. Kepala Sekolah hanya mempunyai hak akses melihat laporan jadwal supervisi yang telah diatur oleh kurikulum.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@extends('layouts.loglayout', ['title' => 'RegistrasiAkun'])
@section('content')
    <div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Registrasi Akun</h3>
            <div class="login-form">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group form-floating-label">
                        <input id="name" name="name" type="name" value="{{ old('name') }}" class="form-control input-border-bottom @error('name') is-invalid @enderror" autofocus required>
                        <label for="name" class="placeholder">Name</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group form-floating-label">
                        <select name="role" id="rol" class="form-control input-border-bottom @error('role') is-invalid @enderror" autofocus required>
                            <option value="guru">Guru</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="kurikulum">Kurikulum</option>
                            <option value="kepsek">Kepala Sekolah</option>
                        </select>
                        <label for="rol" class="placeholder">Role</label>
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group form-floating-label">
                        <input id="username" name="email" type="email" value="{{ old('email') }}" class="form-control input-border-bottom @error('email') is-invalid @enderror" autofocus required>
                        <label for="username" class="placeholder">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
                        <label for="password" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                        @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group form-floating-label">
                        <input id="password-confirm" type="password" class="form-control input-border-bottom" name="password_confirmation" required autocomplete="new-password">
                        <label for="password-confirm" class="placeholder">Confirm Password</label>
                    </div>

                    <div class="form-action mb-2">
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Register</button>
                        <a href="{{ route('login') }}" class="btn btn-danger btn-rounded btn-login">Batal</a>
                    </div>
                </form>
			</div>
		</div>
	</div>
@endsection

@extends('layouts.loglayout', ['title' => 'LoginSuvervisor'])
@section('content')
    <div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">App|Supervisor</h3>
            <div class="login-form">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group form-floating-label">
                        <input id="username" name="email" type="email" class="form-control input-border-bottom" value="{{ old('email') }}" autofocus required>
                        <label for="username" class="placeholder">Email</label>
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
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
                    <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="rememberme">Remember Me</label>
                        </div>
                    </div>
                    <div class="form-action mb-2">
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Login</button>
                    </div>
                    <div class="form-action mb-5">
                        @if (Route::has('register'))
                            Tidak Punya akun ? <a href="{{ route('register') }}">Daftar disini</a>
                        @endif
                    </div>
                </form>
			</div>
		</div>
	</div>
@endsection

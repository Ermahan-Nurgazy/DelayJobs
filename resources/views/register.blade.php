@extends('layout')
	
@section('title')Регистрация@endsection

@section('content')
		<form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
	<!-- <form action="{{ route('register-form') }}" method="post" class="mt-lg-5">
		@csrf
		<h1 class="display-3 text-center text-white">Регистрация</h1>
		<div class="form-group mt-lg-5">
			<input type="text" name="name" id="name" placeholder="Введите ФИО" class="form-control mx-auto" style="width: 50%">
		</div>
		<div class="form-group">
			<input type="email" name="email" id="email" placeholder="Введите email" class="form-control mx-auto" style="width: 50%">
		</div>
		<div class="form-group">
			<input type="password" name="password" id="password" placeholder="Введите пароль" class="form-control mx-auto" style="width: 50%">
		</div>
		<div class="form-group mx-auto" style="max-width: 50%">
			<button type="submit" class="btn text-white text-center form-control" style="border: 2px solid white">Зарегестрироваться</button>
		</div>
	</form> -->
@endsection


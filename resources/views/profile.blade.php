@extends('layout')
	
@section('title')Профиль@endsection

@section('content')
	<div class="card bg-white my-lg-5">
		<div class="d-flex row mt-5 mb-3">
			<div class="col-5">
				<img src="\img\user.jpg" style="height: 300px; width: 300px;" class="ml-lg-5" alt="">
				<div class="ml-lg-5 mt-2">
					<div class="custom-file">
					  <input type="file" class="custom-file-input" id="customFile">
					  <label class="custom-file-label" for="customFile">Choose file</label>
					</div>
					<button class="btn btn-primary mt-2">UPLOAD</button>
				</div>
			</div>
			<div class="form-group col-6 ml-lg-5">
				<div>
					<label>Name:</label>
					<input type="text" class="form-control" value="{{$data->name}}">
				</div>
				<div class="mt-2">
					<label>Email:</label>
					<input type="text" class="form-control" value="{{$data->email}}">
				</div>
				<div class="mt-3">
					<button type="submit" class="btn btn-primary">UPDATE</button>
				</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Обновить пароль') }}
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group row mt-3">
                        <label for="email" class="col-form-label">{{ __('Логин') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Сбросить пароль') }}
                            </button>
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
@endsection
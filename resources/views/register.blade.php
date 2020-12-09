@extends('layout')
	
@section('title')Регистрация@endsection

@section('content')
	<form action="{{ route('register-form') }}" method="post" class="mt-lg-5">
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
	</form>
@endsection


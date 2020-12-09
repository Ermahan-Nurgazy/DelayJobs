@extends('layout')
	
@section('title')Добавление вакансии@endsection

@section('content')
	<form action="{{ route('add-job-submit') }}" method="post" class="mt-lg-5">
		@csrf
		<h1 class="display-3 text-white">Добавление вакансии</h1>
		<div class="form-group mt-lg-5">
			<input type="text" name="name" id="name" placeholder="Введите имя вакансии" class="form-control mx-auto" style="width: 50%">
		</div>
		<div class="form-group">
			<textarea name="description" id="description" class="form-control mx-auto" style="width: 50%" cols="30" rows="10">Описание вакансии</textarea>
		</div>
		<div class="form-group">
			<input type="number" name="salary" id="salary" placeholder="Введите зарплату" class="form-control mx-auto" style="width: 50%">
		</div>
		<div class="form-group mx-auto" style="max-width: 50%">
			<button type="submit" class="btn text-white text-center form-control" style="border: 2px solid white">Разместить вакансию</button>
		</div>
	</form>
@endsection
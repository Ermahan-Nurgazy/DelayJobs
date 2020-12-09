@extends('layout')
	
@section('title')Найти сотрудника@endsection

@section('content')
	<div class="row mt-lg-5">
		<div class="col-4">
			<h1 class="text-white">Поиск сотрудника</h1>
		</div>
		<div class="col-8 mt-3">
			<input type="text" style="width: 60%;" name="job" id="job" placeholder="Введите ключевое слово">
			<button class="btn text-white text-center form-control" style="border: 2px solid white; width: 15%;">Найти</button>
		</div>
	</div>
	<div class="mt-lg-5">
		@foreach($data as $el)
		<div class="card">
			<div class="media position-relative p-3">
			  <div class="media-body">
			  	<div class="d-flex">
				    <h5 class="mt-0">{{ $el->fullName }}</h5>
				    <h5 class="ml-auto" style="color: green;">{{ $el->salary }} KZT</h5>
			    </div>
			    <p>{{ $el->description }}</p>
			    <a href="#" class="stretched-link">Подробнее</a>
			  </div>
			</div>
		</div>
		@endforeach
	</div>
@endsection
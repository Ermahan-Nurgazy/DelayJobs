@extends('layout')
	
@section('title')Найти работу@endsection

@section('content')
	<div class="row mt-lg-5">
		<div class="col-4">
			<h1 class="text-white">Поиск вакансии</h1>
		</div>
		<div class="col-8 mt-3">
			<form action="{{ route('find-job-by-name') }}" method="post">
				@csrf
				<input type="text" style="width: 60%;" name="findJob" id="findJob" placeholder="Введите ключевое слово">
				<button type="submit" class="btn text-white text-center form-control" style="border: 2px solid white; width: 15%;">Найти</button>
			</form>
		</div>
	</div>
	<div class="my-lg-5">
		@foreach($data as $el)
		<div class="card mt-2">
			<div class="media position-relative p-3">
			  <div class="media-body">
			  	<div class="d-flex">
				    <h5 class="mt-0">{{ $el->name }}</h5>
				    <h5 class="ml-auto" style="color: green;">{{ $el->salary }} KZT</h5>
			    </div>
			    <p>{{ $el->description }}</p>
			    <a href="{{ route('details-job', $el->id)}}" role="button" class="btn btn-outline-dark">ПОДРОБНЕЕ</a>
			  </div>
			</div>
		</div>
		@endforeach
	</div>
@endsection
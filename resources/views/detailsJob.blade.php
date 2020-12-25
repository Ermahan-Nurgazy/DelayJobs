@extends('layout')
	
@section('title')Подробнее о вакансии@endsection

@section('content')
	<div class="card bg-white my-lg-5">
		<div class="p-5 d-flex">
			<h3>{{ $data->name }}</h3>
			<h5 class="ml-auto pr-5 pt-2" style="color: green;">{{ $data->salary }} KZT</h5>
		</div>
		<div class="pl-5">
			<h5>{{ $data->description }}</h5>
		</div>
		<div class="p-5 mt-auto">
			<button class="btn btn-outline-dark">ОТКЛИКНУТЬСЯ</button>
		</div>
	</div>
@endsection
@extends('layout')
	
@section('title')Подробнее о работнике@endsection

@section('content')
	<div class="card bg-white my-lg-5">
		@if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
		<div class="p-5 d-flex">
			<h3>{{ $data->fullName }}</h3>
			<h5 class="ml-auto pr-5 pt-2" style="color: green;">{{ $data->salary }} KZT</h5>
		</div>
		<div class="pl-5">
			<h5>{{ $data->description }}</h5>
		</div>
		<div class="p-5 mt-auto">	
			<button type="submit" class="btn btn-outline-dark">ОТКЛИКНУТЬСЯ</button>
		</div>
	</div>
@endsection
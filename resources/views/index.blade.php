@extends('layout')
	
@section('title')Главная страница@endsection

@section('content')
	<div class="row">
		<div class="col-5">
			<img src="\img\Космонавт.jpg" height="80%" alt="">
		</div>
		<div class="col-7">
			<h1 class="font-bold mt-5 text-white text-center">Найди работу мечты</h1>
			<form action="{{ route('find-job-by-name') }}" method="post" class="mt-5">
				@csrf
				<div class="form-group mx-auto">
					<input type="text" placeholder="Введите ключевое слово" name="findJob" id="findJob" class="form-control mx-auto" style="width: 70%">
				</div>
				<div class="form-group mx-auto" style="max-width: 50%">
					<button type="submit" class="btn text-white text-center form-control" style="border: 2px solid white">Найти вакансию</button>
				</div>
				<div class="form-group mx-auto" style="max-width: 50%">
					<a href="{{  route('add-job')  }}" role="button" class="btn text-white text-center form-control mx-auto" style="border: 2px solid white;">Разместить вакансию</a>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-5">
			<img src="\img\Программист.jpg" height="80%" alt="">
		</div>
		<div class="col-7">
			<h1 class="font-bold mt-5 text-white text-center">Найди сотрудника</h1>
			<form action="{{ route('find-worker-by-name') }}" method="post" class="mt-5">
				@csrf
				<div class="form-group mx-auto">
					<input type="text" placeholder="Введите ключевое слово" name="findWorker" id="findWorker" class="form-control mx-auto" style="width: 70%">
				</div>
				<div class="form-group mx-auto" style="max-width: 50%">
					<button type="submit" class="btn text-white text-center form-control" style="border: 2px solid white">Найти сотрудника</button>
				</div>
				<div class="form-group mx-auto" style="max-width: 50%">
					<a href="{{  route('add-worker')  }}" role="button" class="btn text-white text-center form-control mx-auto" style="border: 2px solid white;">Разместить резюме</a>
				</div>
			</form>
		</div>
	</div>
@endsection
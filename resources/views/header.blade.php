<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3" style="background-color: #000;">
  		<a href="/" class="my-0 ml-3 mr-md-auto">
    		<img src="\img\logo.svg" height="40" alt="" loading="lazy">
  		</a>
  		<nav class="my-2 my-md-0 mr-md-3">
		    <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('find-job') }}">Ищу работу</a>
		    <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('find-worker') }}">Ищу сотрудника</a>
		    <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('home') }}">О нас</a>
  		</nav>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  			<img src="\img\user.svg" height="20" alt="" loading="lazy">
      </button>
	</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div style="font-weight: bold;">
          <h1 class="text-center">ВХОД</h1>
        <div class="form-group mx-auto">
          <input type="email" required placeholder="Введите email" class="form-control mx-auto" style="width: 70%">
        </div>
        <div class="form-group">
          <input type="password" required placeholder="Выберите пароль" class="form-control mx-auto" style="width: 70%">
        </div>
        <div class="form-group mx-auto" style="max-width: 50%">
          <button type="submit" class="btn text-black text-center form-control" style="border: 2px solid black">ВОЙТИ</button>
        </div>
        <div class="form-group mx-auto" style="max-width: 50%">
          <button class="btn text-black text-center form-control mx-auto" style="border: 2px solid black;">
            <a href="/register" style="text-decoration: none; color: black">РЕГИСТРАЦИЯ</a>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
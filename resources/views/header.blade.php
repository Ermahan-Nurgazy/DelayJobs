<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3" style="background-color: #000;">
  		<a href="/" class="my-0 ml-3 mr-md-auto">
    		<img src="\img\logo.svg" height="40" alt="" loading="lazy">
  		</a>
  		<nav class="my-2 my-md-0 mr-md-3">
		    <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('find-job') }}">Ищу работу</a>
		    <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('find-worker') }}">Ищу сотрудника</a>

		    <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('about') }}">О нас</a>
        @guest
          @if (Route::has('login'))
            <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('login') }}">{{ __('Вход') }}</a>
          @endif
          @if (Route::has('register'))
            <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
          @endif
        @else
          <a id="navbarDropdown" class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('detailsProfile', Auth::user()->id) }}">Профиль</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Выход') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        @endguest
        <!-- <a class="p-2 text-white" style="text-decoration: none; font-weight: bold;" href="{{ route('profile') }}">Nurgazy Ermahan</a> -->
       <!--  @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
  		</nav>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  			<img src="\img\user.svg" height="20" alt="" loading="lazy">
      </button> -->
	</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div style="font-weight: bold;">
          <h1 class="text-center">ВХОД</h1>
        <div class="form-group mx-auto">
          <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Логин:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ВОЙТИ') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                                <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Зарегистрироваться') }}
                            </a>
                            </div>
                            
                        </div>
                    </form>
          <!-- <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="email" name="email" id="email" required placeholder="Введите email" class="form-control mx-auto" style="width: 70%">
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" required placeholder="Выберите пароль" class="form-control mx-auto" style="width: 70%">
          </div>
          <div class="form-group mx-auto" style="max-width: 50%">
            <button type="submit" class="btn text-black text-center form-control" style="border: 2px solid black">ВОЙТИ</button>
          </div>
          <div class="form-group mx-auto" style="max-width: 50%">
            <button class="btn text-black text-center form-control mx-auto" style="border: 2px solid black;">
              <a href="/register" style="text-decoration: none; color: black">РЕГИСТРАЦИЯ</a>
            </button>
          </form> -->
        </div>
      </div>
    </div>
  </div>
</div>
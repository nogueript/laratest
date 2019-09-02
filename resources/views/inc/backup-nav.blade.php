<div id="app">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-inverse">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>
     <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Home') }}
      </a>
	<span></span>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav mr-auto ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/imlost"><i class="fa fa-map-o"></i> I'm Lost</a>
	  </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-commenting-o"></i> Objective</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact"><i class="fa fa-pencil-square-o"></i> Contact</a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="/about"><i class="fa fa-id-badge"></i> About</a>
          </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('login') }}"><h3><span class="badge badge-pill badge-warning"><i class="fa fa-child"></i> {{ __('User') }}</span></h3></a>
          </li>
          @if (Route::has('register'))
          <!-- <li class="nav-item">
            <a class="nav-link active" href="{{ route('register') }}"><i class=" fa fa-user-plus"></i> {{ __('Sign Up') }}</a>
          </li>
          @endif -->
          @else
          <li><a href="#"></a></li>

          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <i class="fa fa-bell"></i>
              @if(auth()->user()->unreadnotifications->count())
              <span class="badge badge-light">{{ auth()->user()->unreadnotifications->count() }}</span>
              @endif
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('markRead') }}">Mark all as Read</a></li>
              @foreach (auth()->user()->unreadNotifications as $notification)
              <li style="background-color: lightgray"><a class="dropdown-item" href="#">{{$notification->data['data']}}</a></li>
              @endforeach
              @foreach (auth()->user()->readNotifications as $notification)
              <li><a class="dropdown-item" href="#">{{$notification->data['data']}}</a></li>
              @endforeach
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <i class="fa fa-user"></i>

              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <main class="py-4">
  </main>
</div>

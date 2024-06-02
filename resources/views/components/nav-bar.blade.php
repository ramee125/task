@php
$currentRoute = Route::currentRouteName()
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{$currentRoute == 'home'?'active':''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$currentRoute == 'aboutus'?'active':''}}"" href="{{route('aboutus')}}">aboutus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$currentRoute == 'contactus'?'active':''}}"" href="{{route('contactus')}}">contactus</a>
          </li>


        </ul>
        <form class="d-flex" index='-1'>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

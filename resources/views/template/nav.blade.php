<nav class="s-menu-content animated-fast" role="navigation">
  <a href="#" id="hide-menu" class="s-menu-toggle"><span></span></a>
  <h1>Menu</h1>
  <ul>
    <li><a href="{{ route('index') }}">Home</a></li>
    <li><a href="{{ route('forum') }}">Forum</a></li>
    <li><a href="{{ route('myCourse') }}">Learning</a></li>
    <li><a href="{{route('survey')}}">Survey</a></li>
    <li><a href="{{ route('adminIndex') }}">Admin / Dosen</a></li>
    <li><a href="{{route('profile')}}">Profile</a></li>

@if(Auth::check())
<li style="padding-left: 20%;">Welcome back, {{ Auth::user()->name }}</li>
<a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <button type="submit" class="btn btn-primary" style="margin-left: 30%;">
              Logout
          </button>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" >
    {{ csrf_field() }}
</form>
@endif
</ul>
</nav>

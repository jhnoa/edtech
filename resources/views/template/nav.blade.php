<nav class="s-menu-content animated-fast" role="navigation">
  <a href="#" id="hide-menu" class="s-menu-toggle"><span></span></a>
  <h1>Menu</h1>
  <ul>
    <li><a href="{{ route('index') }}">Home</a></li>
    <li><a href="forum">Forum</a></li>
    <li><a href="learning">Learning</a></li>
    <li><a href="survey">Survey</a></li>
    <li><a href="profile">Profile</a></li>
  
@if(Auth::check())
<li>Welcome back, {{ Auth::user()->name }}</li>
<a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" >
    {{ csrf_field() }}
</form>
@else
<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}" style="bottom: 0px; position: fixed;">
  {{ csrf_field() }}

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" class="col-md-3 col-form-label">E-Mail</label>

      <div class="col-md-8">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" class="col-md-3 col-form-label">Password</label>

      <div class="col-md-8">
          <input id="password" type="password" class="form-control" name="password" required>

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group">
      <div class="col-sm-6">
          <div class="checkbox">
              <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
          </div>
      </div>

      <div class="col-sm-4">
          <button type="submit" class="btn btn-primary">
              Login
          </button>
      </div>

      <div class="col-sm-12">
          <a class="btn-link" href="{{ route('password.request') }}">
              Forgot Your Password?
          </a>
      </div>
  </div>
  <div class="form-group">
      
  </div>
</form>
@endif
</ul>
</nav>

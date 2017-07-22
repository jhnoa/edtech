	<div class="header">
    	<div class="container">
	        <div class="row">
	            <div class="col-md-10">
	                <!-- Logo -->
	                <div class="logo">
	                    <h1><a href="index.html">Learning Center</a></h1>
	                </div>
	            </div>
	            <div class="col-md-2">
	                <div class="navbar navbar-inverse" role="banner">
	                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                        <ul class="nav navbar-nav">
	                            <li class="dropdown">
	                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
	                            	<ul class="dropdown-menu animated fadeInUp">
	                                	<li><a href="profile.html">Profile</a></li>
	                                	<li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" >
												{{ csrf_field() }}
											</form>
	                                </ul>
	                            </li>
	                        </ul>
	                    </nav>
	                </div>
	            </div>
	        </div>
	     </div>
	</div>
<div class="col-md-2">
	<div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li {{ Request::routeIs('adminIndex') ? 'class=current' : '' }}>
            <a href="{{ route('adminIndex') }}"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
            <li {{ Request::routeIs('adminAssign') ? 'class=current' : '' }}>
            <a href="{{ route('adminAssign') }}"><i class="glyphicon glyphicon-calendar"></i> Assigned Subject</a></li>
            <li {{ Request::routeIs('assignDosenToCourse') ? 'class=current' : '' }}>
            <a href="{{ route('assignDosenToCourse') }}"><i class="glyphicon glyphicon-stats"></i> Assign Lecturer</a></li>
            <li {{ Request::routeIs('makeCourse') ? 'class=current' : '' }}>
            <a href="{{ route('makeCourse') }}"><i class="glyphicon glyphicon-list"></i> Make Course</a></li>
            <li {{ Request::routeIs('makeNew') ? 'class=current' : '' }}>
            <a href="{{ route('makeNew') }}"><i class="glyphicon glyphicon-record"></i> Make News </a></li>
            <!--li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Pages
                    <span class="caret pull-right"></span>
                </a-->
                <!-- Sub menu -->
                <!--ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="signup.html">Signup</a></li>
                </ul>
            </li>
            <li><a href=""><i class="glyphicon glyphicon-pencil"></i> Register Account</a></li-->
        </ul>
     </div>
</div>
<div class="col-md-2">
	<div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            @if($title == 'Home')
            	<li class="current">
            @else
            	<li>
            @endif
            <a href="{{ route('adminIndex') }}"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
            
            @if($title == 'Assigned Subject')
            	<li class="current">
            @else
            	<li>
            @endif
            <a href="{{ route('adminAssign') }}"><i class="glyphicon glyphicon-calendar"></i> Assigned Subject</a></li>
            
            <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
            <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
            <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
            <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
            <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Pages
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="signup.html">Signup</a></li>
                </ul>
            </li>
        </ul>
     </div>
</div>
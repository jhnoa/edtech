<div class="row">
  		<div class="col-md-12">
  			<div style="width: 100%; height: 15rem;"></div>
  		</div>
  		<div class="col-md-2">
  			<div style="width: 100%; height: 2rem; background-color: #FFF"></div>
  		</div>
  		<div class="col-md-10">
			<div id="page-content">
				<!-- START NAVBAR -->
					<div id="headerstrip">
						<div class="jcontrolsleft">
							<div class="nav_title">navigation</div>
							<div class="navbar clearfix">
								<div class="breadcrumb"> <span class="accesshide">Page path</span>
									<ul role="navigation">
										<li>
											<a href="{{ route('index') }}">Home</a>
										</li>
										<li>
											<span class="accesshide ">
												<span class="arrow_text">/</span>&nbsp;
											</span>
											<span class="arrow sep">&gt;</span><a href="{{route('myCourse')}}">My Courses</a>
										</li>
										<li>
											<span class="accesshide ">
												<span class="arrow_text">/</span>&nbsp;
											</span>
											<span class="arrow sep">&gt;</span>{{$prodi}}
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div id="ebutton"></div>
					</div>
				<!-- END NAVBAR -->

					   <div id="region-main-box-course">
						   <div id="region-post-box">
							  <div id="region-main-wrap">
								 <div id="region-main-pad">
								   <div id="region-main">
									 <div class="region-content">
									  <div role="main">
										 <div id="inst822" class="block_course_overview  block" role="complementary" aria-labelledby="instance-822-header">
										 	<div class="header">
										 		<div class="title" id="yui_3_9_1_2_1498706633491_288">
										 			<h2 id="instance-822-header">Course overview</h2>
										 			<div class="commands"></div>
										 		</div>
										 	 </div>
							 	 <div class="content">
							 	 	
							 	 @foreach($learnings as $a => $learning)
							 	 	<div class="course_list">
							  			<div id="course-365" class="box coursebox">
							  				<div class="course_title">
							  					<h2 class="title">
							  						<a title="Dasar-Dasar Animasi (HCI10072) - Kelas A (2014)" href="{{ route('viewCourse') }}">{{$learning->name}} ({{$learning->code}}) - ({{$learning->year}})</a>
							  					</h2>
							  					<div class="box flush"></div>
							  				</div>
							  				<div class="activity_info">
							  					<div class="activity_overview">
							  						<div id="region_365_assign" class="collapsibleregion  collapsed" style="height: 25px;">
							  							<div id="region_365_assign_sizer">
							  								<div id="region_365_assign_caption" class="collapsibleregioncaption" title="Click to expand or collapse">
							  									<a href="#">
								  									<a href="http://elearning.surya.ac.id/mod/assign/index.php?id=365">
								  										<img class="iconlarge" alt="Assignment" title="Assignment" src="http://elearning.surya.ac.id/theme/image.php/rocket/mod_assign/1480305559/icon">
								  									</a>
							  									</a>You have assignments that need attention
							  								</div>

											<div class="box flush"></div>
										</div>
									</div>
									@endforeach

								 </div>
								   		  </div>
									  </div>
									 </div>
				 				   </div>
				 				 </div>
				 			  </div>
				 		   </div>
				 		 </div>
			</div>
		</div>

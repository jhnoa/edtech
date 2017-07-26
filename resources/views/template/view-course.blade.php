<div id="page-content" style="top: 150px;width: 75%;left: 20%;">
	<!-- START NAVBAR -->
		<div id="headerstrip">
			<div class="jcontrolsleft">
				<div class="nav_title">navigation</div>
				<div class="navbar clearfix">
					<div class="breadcrumb"> <span class="accesshide">Page path</span>
						<ul role="navigation">
							<li><a href="{{ route('index') }}">Home</a></li>
							<li> <span class="accesshide "><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&gt;</span> <a href="{{route('myCourse')}}">My Course</a></li>
							<li> <span class="accesshide "><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&gt;</span> {{$prodi}}</li>
							<li> <span class="accesshide "><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&gt;</span> <a href="http://elearning.surya.ac.id/course/index.php?categoryid=61">Semester Genap - 2014/2015</a></li>
							<li> <span class="accesshide "><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&gt;</span> <a title="Dasar-Dasar Animasi (HCI10072) - Kelas A (2014)" href="http://elearning.surya.ac.id/course/view.php?id=365">Dasar-Dasar Animasi (HCI10072) - Kelas A (2014)</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="ebutton"></div>
		</div>
	<!-- END NAVBAR -->

		   <div id="region-main-box-course">
			   <div id="region-post-box" style="border-bottom-left-radius: 1em;border-bottom-right-radius: 1em;min-height: 400px;left: 49.2%;">
				  <div id="region-main-wrap">
					 <div id="region-main-pad">
					   <div id="region-main">
						 <div class="region-content">
						 	<div role="main">
								<span id="maincontent"></span>
								<div class="course-content" >
									<h2 class="accesshide">Weekly outline</h2>
									<ul class="weeks">
										<li id="section-1" class="section main clearfix" style="margin-top: 3%; padding-bottom: 2%;padding-left: 2%;">
											<div class="content">
												<h3 class="sectionname"><b style="font-family: -webkit-body;">Pertemuan 1</b></h3>
												<div class="summary"></div>
												<ul class="section img-text">
													<li class="activity resource modtype_resource " id="module-1406">
														<div class="mod-indent">
															<div class="activityinstance">
																<a class="" onclick="" href="http://elearning.surya.ac.id/mod/resource/view.php?id=1406"><img src="http://elearning.surya.ac.id/theme/image.php/rocket/core/1480305559/f/jpeg-24" class="iconlarge activityicon" alt=" " role="presentation">
																	<span class="instancename">{{$file_upload}}
																		<span class="accesshide "> File</span>
																	</span>
																</a>
															</div>
														</div>
													</li>
													<li class="activity folder modtype_folder " id="module-1475">
														<div class="mod-indent">
															<div class="activityinstance">
																<a class="" onclick="" href="{{route('makeFolder')}}"><img src="http://elearning.surya.ac.id/theme/image.php/rocket/folder/1480305559/icon" class="iconlarge activityicon" alt=" " role="presentation">
																			<span class="instancename">Lecture Notes
																				<span class="accesshide "> Folder</span>
																			</span>
																</a>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							 </div>
						  </div>
					   </div>
					 </div>
				  </div>
		   </div>

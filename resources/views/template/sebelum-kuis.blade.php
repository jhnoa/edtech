	<div id="page-content-survey">
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

			<div id="region-main-box" style="overflow: hidden;" >
				<div id="region-post-box-survey" style="border-bottom-left-radius: 1em;border-bottom-right-radius: 1em;min-height: 400px;">
					<div class="judul">
                      <a>Judul Pertemuan</a>
					  <div class="table-judul">
						{{$title_pertemuan}}
					  </div>
					  <c>Deskripsi</c>
					  <div class="table-deskripsi">
						<li>{{$deskripsi_text}}</li>
						<li>Isi Deskripsi lainnya</li>
					  </div>
					  <a href="{{route('kuis')}}" style="padding-left: 4%;"><button type="submit" class="btn btn-default" >Start</button></a>
					</div>
				</div>
			</div>
	</div>

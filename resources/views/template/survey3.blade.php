 <!-- Search form
    ============================================= -->
	<div id="page-content-survey">
	<!-- START CUSTOM SEARCH REGION  -->
	
	<!-- END CUSTOM SEARCH REGION -->
		<!-- <div id="sitename">Surya University</div> -->
		<div id="headerstrip" style="margin-left: -0.6%;height: 35px;">
			<div class="nav_title" style="padding-left: 45%;"><b>Buat Survey</b></div>
		</div>
       <div id="region-post-box-survey">

               <div id="region-main">
                 <div class="region-content" style="margin-top: 2%;padding-left: 2%;"> 
					<form role="form" name="quizform" action="quiztest.asp?qtest=HTML" method="post" style="padding-left: 2%;">
						<p id="demo" style="padding-left: 2%; padding-bottom: 2%;"></p>
					</form>

					<a style="color: #000;"><b>Pilih bentuk survey: </b></a>
					<select id="selectpicker">
					  <option value="pilihan-ganda" style="background-color: #fff;" onclick="buka()">Radio Button</option>
					  <option value="checkbox" style="background-color: #fff;" onclick="buka()">Checkbox</option>
					  <option value="Likert" style="background-color: #fff;" onclick="buka()">Likert</option>
					  <option value="pendapat" style="background-color: #fff;" onclick="buka()">Pendapat</option>
					</select>
					<button type="button" class="btn btn-primary" onclick="buka()">pilih</button>
					</div>					
					<button type="button" class="btn btn-primary" style="margin-left: 44%;"><a href="{{route('survey')}}" style="color: #fff;">selesai</a> </button>                 
              	 </div>
             </div>
       </div>
    </div>

<script type="text/javascript">
	$(function () {
	    "use strict";
	    var resizeDiv = function (object) {
	        object.height($(window).height() - $('#header').height());
	    };


	    $(window).ready(function () {
	        resizeDiv($('#page-content'));
	    });

	    $(window).bind("resize", function () {
	        resizeDiv($('#page-content'));
	    });

	});


</script>

<script type="text/javascript" src="js/template-pertanyaan"></script>
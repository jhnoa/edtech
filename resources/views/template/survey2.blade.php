 <!-- Search form
    ============================================= -->
	<div id="page-content-survey">
	<!-- START CUSTOM SEARCH REGION  -->
	
	<!-- END CUSTOM SEARCH REGION -->
		<!-- <div id="sitename">Surya University</div> -->
		<div id="headerstrip" style="margin-left: -0.6%;height: 35px;">
			<div class="nav_title" style="padding-left: 45%;"><b>Survey</b></div>
		</div>
       <div id="region-post-box-survey">

               <div id="region-main">
                 <div class="region-content" style="margin-top: 2%;padding-left: 2%;"> 
                 	<div class="soal-pilihan-ganda" style="margin-bottom: 2%;">
                 		<a style="color: #000;">1. Pertanyaan A.Likert</a>
                 		<form role="form" name="quizform" action="quiztest.asp?qtest=HTML" method="post" style="padding-left: 2%;">
							    <input type="hidden" name="starttime" value="7/20/2017 7:51:44 AM">
							    <input type="hidden" name="answers" value="0000000000000000000000000000000000000000" size="25">
							    <input type="hidden" name="qnumber" value="1" size="25">
							    <div class="col-md-8" style="width: 103%; margin-left: -3%;">
								    <div class="col-md-3" style="margin-top: 9px;">Soal Likert</div>
								    <div class="radio col-md-1"><label><input type="radio" name="quiz" id="2" value="2"> 1</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="quiz" id="1" value="1"> 2</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="quiz" id="3" value="3"> 3</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="quiz" id="4" value="4"> 4</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="quiz" id="5" value="5"> 5</label></div>
							    </div>					    
						    </form>
                 	</div>
                	<div class="soal-pilihan-ganda">
                 		<a style="color: #000;">2. Pertanyaan pilihan satu</a>
	                 		<form role="form" name="quizform" action="quiztest.asp?qtest=HTML" method="post" style="padding-left: 2%;">
							    <input type="hidden" name="starttime" value="7/20/2017 7:51:44 AM">
							    <input type="hidden" name="answers" value="0000000000000000000000000000000000000000" size="25">
							    <input type="hidden" name="qnumber" value="1" size="25">
							    <div class="radio"><label><input type="radio" name="quiz" id="2" value="2"> pilihan a</label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="1" value="1"> pilihan b</label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="3" value="3"> pilihan c</label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="4" value="4"> pilihan d</label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="5" value="5"> pilihan lainnya: <input type="text" class="tanggapan-lain" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Tanggapan lain" dir="auto" data-initial-dir="auto" data-initial-value="" badinput="false"></label></div>
							    <br>
						    </form>
                 	</div>
                 	<div class="soal-checkbox" style="margin-bottom: 2%;">
                 		<a style="color: #000;">3. Pertanyaan checkbox</a>
                 		 <div class="pilihan-jawaban" style="padding-left: 2%;">
                 		 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c>Checkbox 1</c></label></div>
						 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c>Checkbox 2</c></label></div>
						 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c>Checkbox 3</c></label></div>
						 	<div>						    	
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c>Checkbox 4</c></label></div>		
						 </div>			
                 	</div>
                 	<div class="soal-essay">
                 		<a style="color: #000;">4. Pertanyaan opini atau tanggapan akhir</a>
                 		<div class="jawaban-essay">
                 			<textarea type="text" id="fname" name="firstname" placeholder="Your Answer"></textarea>
                 		</div>                 			
                 	</div>
                 	   	<button type="submit" class="btn btn-primary" >
              				<a href="{{route('survey')}}" style="color: #fff;">Submit</a>
          				</button>
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
    
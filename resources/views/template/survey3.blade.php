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
					<a style="color: #000;"><b>Pilih bentuk survey</b></a>
					<select id="selectpicker">
					  <option value="pilihan-ganda" style="background-color: #fff;" onclick="buka()">pilihan ganda</option>
					  <option value="checkbox" style="background-color: #fff;" onclick="buka()">checkbox</option>
					  <option value="Likert" style="background-color: #fff;" onclick="buka()">Likert</option>
					  <option value="pendapat" style="background-color: #fff;" onclick="buka()">Pendapat</option>
					</select>
					<button type="button" class="btn btn-primary" onclick="buka()">pilih</button>
					</div>					
					<form role="form" name="quizform" action="quiztest.asp?qtest=HTML" method="post" style="padding-left: 2%;">
						<p id="demo" style="padding-left: 2%; padding-bottom: 2%;"></p>
					</form>                 
              	 </div>
             </div>
       </div>
    </div>

<!--<script type="text/javascript">
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


</script>-->

<script>
var nomor = 1;
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function buka() {
    var x = document.getElementById("selectpicker").value;
    //document.getElementById("demo").innerHTML = x;
    if(x=="Likert"){
    	likert();
    }
    else if(x=="pilihan-ganda"){
    	pilihan_ganda();
    }
    else if(x=="checkbox"){
    	checkbox();
    }
    else if(x=="pendapat"){
    	pendapat();
    }
}

function likert(){
	document.getElementById("demo").innerHTML += `<div class="soal-pilihan-ganda" style="margin-bottom: 2%;">
                 		<a style="color: #000;">`;
    document.getElementById("demo").innerHTML += nomor;
    document.getElementById("demo").innerHTML += `. Jenis Likert</a>

							    <input type="hidden" name="qnumber" value="1" size="25">
							    <div class="col-md-8" style="width: 103%; margin-left: -3%;">
								    <div class="col-md-3" style="margin-top: 9px;"><input type="text" name="soal"></div>
								    <div class="radio col-md-1"><label><input type="radio" name="jawaban" id="2" value="2"> 1</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="jawaban" id="1" value="1"> 2</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="jawaban" id="3" value="3"> 3</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="jawaban" id="4" value="4"> 4</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="jawaban" id="5" value="5"> 5</label></div>
							    </div>					    
                 	</div>`;
                 	nomor++;
}

function pilihan_ganda(){
	document.getElementById("demo").innerHTML += `<div class="soal-pilihan-ganda" style="margin-bottom: 2%;"> <a style="color: #000;">`;
	document.getElementById("demo").innerHTML += nomor;
	document.getElementById("demo").innerHTML +=`. <input type="text" name="soal"></a>
							    <input type="hidden" name="qnumber" value="1" size="25">
							    <div class="radio"><label><input type="radio" name="quiz" id="1" value="1"> <input type="text" name="jawaban"></label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="2" value="2"> <input type="text" name="jawaban"></label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="3" value="3"> <input type="text" name="jawaban"></label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="4" value="4"> <input type="text" name="jawaban"></label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="5" value="5"> pilihan lainnya: <input type="text" class="tanggapan-lain" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Tanggapan lain" dir="auto" data-initial-dir="auto" data-initial-value="" badinput="false"></label></div>
							    <br>
                 	</div>`;
                 	nomor++;

}

function checkbox(){
	document.getElementById("demo").innerHTML += `<div class="soal-pilihan-ganda" style="margin-bottom: 2%;"> <a style="color: #000;">`;
	document.getElementById("demo").innerHTML += nomor;
	document.getElementById("demo").innerHTML +=`. <input type="text" name="soal"></a>
                 		 <div class="pilihan-jawaban" style="padding-left: 2%;">
                 		 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c><input type="text" name="jawaban"></c></label></div>
						 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c><input type="text" name="jawaban"></c></label></div>
						 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c><input type="text" name="jawaban"></c></label></div>
						 	<div>						    	
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c><input type="text" name="jawaban"></c></label></div>		
						 </div>			
                 	</div>`;
                 	nomor++;
}
function pendapat(){
			document.getElementById("demo").innerHTML += `<div class="soal-pilihan-ganda" style="margin-bottom: 2%;"> <a style="color: #000;">`;
	document.getElementById("demo").innerHTML += nomor;
	document.getElementById("demo").innerHTML +=`. <input type="text" name="soal"></a>
                 		<div class="jawaban-essay">
                 			<textarea type="text" id="fname" name="jawaban" placeholder="Your Answer"></textarea>
                 		</div>                 			
                 	</div>`;
                 	nomor++;
}
</script>
    
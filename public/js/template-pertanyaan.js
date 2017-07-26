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
								    <div class="col-md-3" style="margin-top: 9px;"><input type="text" name="soal" placeholder="soal"></div>
								    <div class="radio col-md-1"><label><input type="radio" name="jawaban" id="1" value="1"> 1</label></div>
								    <div class="radio col-md-1" style="margin-top: 10px;"><label><input type="radio" name="jawaban" id="2" value="2"> 2</label></div>
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
	document.getElementById("demo").innerHTML +=`. <input type="text" name="soal" placeholder="soal"></a>
							    <input type="hidden" name="qnumber" value="1" size="25">
							    <div class="radio"><label><input type="radio" name="quiz" id="1" value="1"> <input type="text" name="jawaban" placeholder="jawaban 1"></label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="2" value="2"> <input type="text" name="jawaban" placeholder="jawaban 2"></label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="3" value="3"> <input type="text" name="jawaban" placeholder="jawaban 3"></label></div>
							    <div class="radio"><label><input type="radio" name="quiz" id="4" value="4"> <input type="text" name="jawaban" placeholder="jawaban 4"></label></div>
							    <br>
                 	</div>`;
                 	nomor++;

}

function checkbox(){
	document.getElementById("demo").innerHTML += `<div class="soal-pilihan-ganda" style="margin-bottom: 2%;"> <a style="color: #000;">`;
	document.getElementById("demo").innerHTML += nomor;
	document.getElementById("demo").innerHTML +=`. <input type="text" name="soal" placeholder="Pertanyaan"></a>
                 		 <div class="pilihan-jawaban" style="padding-left: 2%;">
                 		 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c><input type="text" name="jawaban" placeholder="jawaban 1"></c></label></div>
						 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c><input type="text" name="jawaban" placeholder="jawaban 2"></c></label></div>
						 	<div>
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c><input type="text" name="jawaban" placeholder="jawaban 3"></c></label></div>
						 	<div>						    	
						    	<label><input type="checkbox" id="coding" name="quiz" value="coding">
						    	<c><input type="text" name="jawaban" placeholder="jawaban 4"></c></label></div>		
						 </div>			
                 	</div>`;
                 	nomor++;
}
function pendapat(){
			document.getElementById("demo").innerHTML += `<div class="soal-pilihan-ganda" style="margin-bottom: 2%;"> <a style="color: #000;">`;
	document.getElementById("demo").innerHTML += nomor;
	document.getElementById("demo").innerHTML +=`. <input type="text" name="soal" placeholder="soal"></a>
                 		<div class="jawaban-essay">
                 			<textarea type="text" id="fname" name="jawaban" placeholder="Your Answer"></textarea>
                 		</div>                 			
                 	</div>`;
                 	nomor++;
}
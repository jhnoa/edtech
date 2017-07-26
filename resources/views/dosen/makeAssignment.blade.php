@extends('dosen.template.index')
@section('title', $title)

@section('content')
<<<<<<< HEAD
@extends('dosen.template.index')
@section('title', $title)

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Make Assignment</div>
			</div>
			<div class="panel-body">
				<form action = "{{ route('makeAssignmentPost') }}" method = "post">
				{{ csrf_field() }}
					<input type="hidden" name="userId" value="{{ $id }}">
				  <div class="form-group col-md-6">
				    <label for="title">Title:</label>
      				<input type="text" class="form-control" rows="5" id="title" name="title">
				  </div>
				  <div class="form-group col-md-12">
				    <label for="content">Content:</label>
      				<textarea class="form-control" rows="5" id="content" name="content"></textarea>
				  </div>
				  <div class="form-group col-md-6">
				    <button type="submit" class="btn btn-default btn-md">Submit</button>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
=======

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
					  <option value="pendapat" style="background-color: #fff;" onclick="buka()">Pendapat</option>
					</select>
					<button type="button" class="btn btn-primary" onclick="buka()">pilih</button>
					</div>					
					<button type="button" class="btn btn-primary" style="margin-left: 44%;"><a href="{{route('survey')}}" style="color: #fff;">selesai</a> </button>                 
              	 </div>
             </div>
       </div>
    </div>
>>>>>>> 6c10af97d78c8c2a2e73a5e4de15e9a6b637049d

@endsection
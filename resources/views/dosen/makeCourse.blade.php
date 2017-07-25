@extends('dosen.template.index')
@section('title', $title)

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Make Course</div>
			</div>
			<div class="panel-body">
				<form>
				  <div class="form-group col-md-12">
				    <label for="name">Course Name:</label>
				    <input type="text" class="form-control" id="name" placeholder="Course Name">
				  </div>
				  <div class="form-group col-md-4">
				    <label for="code">Course Code</label>
				    <input type="text" class="form-control" id="code" placeholder="Course Code">
				  </div>
				  <div class="form-group col-md-4">
				    <label for="major">Major:</label>
				    <input type="text" class="form-control" id="major" placeholder="Major">
				  </div>
				  <div class="form-group col-md-4">
				    <label for="year">Year:</label>
				    <input type="text" class="form-control" id="year" placeholder="Year">
				  </div>
					<div class="form-group col-md-6">
				    <label for="semester">Semester:</label>
				    <input type="text" class="form-control" id="semester" placeholder="Semester">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="meet">Meet:</label>
				    <input type="text" class="form-control" id="meet" placeholder="Meet">
				  </div>
				  <button type="submit" class="btn btn-default btn-md">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
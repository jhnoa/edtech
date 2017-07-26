@extends('dosen.template.index')
@section('title', $title)

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Assign Lecturer</div>
			</div>
			<div class="panel-body" id="content">
				<div class="col-md-12">
					<form action="{{ route('assignDosenToCoursePost') }}" id="contentForm" method="post">
					{{ csrf_field() }}
						<div class="form-group col-md-4">
							<label for="code">Lecturer Name:</label>
							<select class="selectpicker" name="code">
							@foreach($lecturers as $lecturer)
								<option class="form-control" name="code" value="{{$lecturer->id}}">{{$lecturer->name}}</option>
							@endforeach
							</select>	
						</div>
						<div class="form-group col-md-4">
							<label for="name">Course Name:</label>
							<select class="selectpicker" name="name">
							@foreach($courses as $course)
								<option class="form-control" name="name" value="{{$course->id}}">{{$course->name}}</option>
							@endforeach
							</select>	
						</div>
						<div class="col-md-2">
							<button class="btn btn-default btn-md" type="submit" id="add">Add More</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
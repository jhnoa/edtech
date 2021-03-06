@extends('dosen.template.index')
@section('title', $title)

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Assigned Subjects</div>
			</div>
			<div class="panel-body">
				
				@foreach ($assigned as $key => $val)
					<a href="{{ route('adminAssignDetail',['course' => $val['id']]) }}" class="list-group-item {{ $val['id'] === $course ? "active" : "" }}">{{$val['name']}}</a>
				@endforeach
				
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="content-box-header">
					<div class="panel-title assignedTitle">Detail - {{$courseName}}</div>
  				</div>
  				<div class="content-box-large box-with-header assignedContent">
  					@foreach ($content as $key => $val)
  					{{$key}}: {{ $val }} <br />
  					@endforeach
					<br /><br />
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
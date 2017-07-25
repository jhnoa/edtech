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
						<a href="{{ route('adminAssignDetail',['course' => $val]) }}" class="list-group-item">{{$val}}</a>
				@endforeach
				
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="content-box-header">
					<div class="panel-title assignedTitle">Detail</div>
  				</div>
  				<div class="content-box-large box-with-header assignedContent">
	  				Click on course to view course detail
					<br /><br />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="content-box-header">
					<div class="panel-title">New vs Returning Visitors</div>
				</div>
				<div class="content-box-large box-with-header">
						
		  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
					<br /><br />
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 panel-warning">
		<div class="content-box-header panel-heading">
			<div class="panel-title ">New vs Returning Visitors</div>
		</div>
		<div class="content-box-large box-with-header">
				Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
			<br /><br />
		</div>
	</div>
</div>
@endsection
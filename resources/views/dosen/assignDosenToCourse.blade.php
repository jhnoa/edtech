@extends('dosen.template.index')
@section('title', $title)

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Assign Lecturer</div>
			</div>
			<div class="panel-body">
				
				@php
					var_dump($lecturers);
					var_dump($courses);
				@endphp
				
			</div>
		</div>
	</div>
</div>
@endsection
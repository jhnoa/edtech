@extends('dosen.template.index')
@section('title', $title)

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Make News - {{ $name }}</div>
			</div>
			<div class="panel-body">
				<form action = "{{ route('makeNewPost') }}" method = "post">
				{{ csrf_field() }}
					<input type="hidden" name="userId" value="{{ $id }}">
				  <div class="form-group col-md-12">
				    <label for="content">Content:</label>
      				<textarea class="form-control" rows="5" id="content" name="content"></textarea>
				  </div>
				  <button type="submit" class="btn btn-default btn-md">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
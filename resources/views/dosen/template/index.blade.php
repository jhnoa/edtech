<!DOCTYPE html>
<html>
  @include('dosen.template.meta')
  <body>
  	@include('dosen.template.header')

    <div class="page-content">
    	<div class="row">
    		@include('dosen.template.nav')
    		<div class="col-md-10">
    			@section('content')
            	
        		@show
        	</div>
    	</div>
    </div>
    @include('dosen.template.footer')
  </body>
</html>
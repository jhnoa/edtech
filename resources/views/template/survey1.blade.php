 <!-- Search form
    ============================================= -->
	<div id="page-content-survey">
	<!-- START CUSTOM SEARCH REGION  -->

	<!-- END CUSTOM SEARCH REGION -->
		<!-- <div id="sitename">Surya University</div> -->
		<div id="headerstrip" style="margin-left: -0.6%;height: 35px;">
			<div class="nav_title" style="padding-left: 45%;"><b>Survey</b></div>
		</div>
       <div id="region-post-box-survey">

               <div id="region-main">
                 <div class="region-content" style="margin-top: 2%;padding-left: 2%;">
					<a class="" onclick="" href="{{route('surveyMake')}}"><img src="img/plus-sign.png" class="iconlarge activityicon" alt=" " role="presentation" style="width: 3%;">
					<span class="instancename">Buat Survey Baru
						<span class="accesshide ">New Survey</span>
					</span></a>
					<div class="clearfix">
            			<a href="{{route('surveyView')}}">
            				<input class="btn-survey span12 btn-realto-form btn-large" value="{{$survey_title}}" type="submit">
            			</a>

        			</div>
              	 </div>
             </div>
       </div>
    </div>

<script type="text/javascript">
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
</script>

 <!-- Search form
    ============================================= -->
  	<div class="row">
  		<div class="col-md-offset-6 col-md-2">
  			<div style="width: 100%; height: 15rem;">
  				
  			</div>
  		</div>
  		<div class="col-md-offset-4">
  			<div style="width: 100%; height: 15rem;">
  				
  			</div>
  		</div>
  		<div class="col-md-2">
  			<div style="width: 100%; height: 2rem; background-color: #FFF"></div>
  		</div>
  		<div class="col-md-10">
  			<div id="page-content">
	<div id="hometopblocks">

	<!-- START CUSTOM TOPLINKS REGION  -->
		
	<!-- END CUSTOM TOPLINKS REGION -->

	<!-- START CUSTOM HOMEBLOCK REGION  -->
		<img src="http://learning.surya.ac.id/theme/rocket/pix/banner/default.png" alt="Smiley face" style="
    width: 100%;"> 
	<!-- END CUSTOM HOMEBLOCK REGION -->

	</div>


	<!-- START CUSTOM SEARCH REGION  -->
	
	<!-- END CUSTOM SEARCH REGION -->
		<!-- <div id="sitename">Surya University</div> -->

    
       <div id="region-main-box"> 
           <div id="region-post-box">
              <div id="region-main-wrap">
                 <div id="region-main-pad">
                   <div id="region-main">
                     <div class="region-content">
                            <div role="main" style="padding-left: 3%;">
                            	<span id="maincontent"></span>
                            	<div id="site-news-forum" style="font-family: -webkit-body; border:1px solid; border-radius: 10px; margin-top: 4%; margin-bottom: 4%;">
                                <h2 class="headingblock header" style="background-color: #fff; padding-left: 40%; ">Site news</h2><a id="p759"></a>
                              
                              @foreach($news as $a => $new)

                              
                                  <div class="forumpost clearfix firstpost starter">
                                    <div class="row header clearfix" style="background-color: #fff;">
                                      
                                      <div class="topic firstpost starter">
                                        <div class="subject">{{ $new->title }}</div>
                                      <div class="author">by {{ $new->name }} - {{ $new->updated_at }}
                                      </div>
                                      </div>
                                    </div>
                                    <div class="row maincontent clearfix">
                                      <div class="no-overflow">
                                        <div class="content">
                                          <div class="posting fullpost">{{ $new->content }}
                                        </div>
                                    </div>
                                </div>                
                              </div>
                        </div>
                  

                              @endforeach
                              </div>
    						</div>
    				</div>
    			   </div>
    			  </div>
    			 </div>
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
    
<div id="page-content-survey">
	<!-- START NAVBAR -->
		<div id="headerstrip">
			<div class="jcontrolsleft">
				<div class="nav_title">navigation</div>
				<div class="navbar clearfix">
					<div class="breadcrumb"> <span class="accesshide">Page path</span>
						<ul role="navigation">
							<li>
								<a href="{{ route('index') }}">Home</a>
							</li>
							<li>
								<span class="accesshide ">
									<span class="arrow_text">/</span>&nbsp;
								</span>
								<span class="arrow sep">&gt;</span><a href="{{ route('forum') }}" >FORUM</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="ebutton"></div>
		</div>

		<div class="forumbg">
					<div class="inner">
					<ul class="topiclist forums" style="padding-left: 0px;">
							<li class="row">
								<dl class="icon forum_read" style="margin-left: 0px;">
										<dt title="No unread posts">
											<span class="ico_forum_read"></span>
																		<div class="list-inner">
																		<a href="{{ route('forumView') }}" class="forumtitle">{{$course}}</a>
																		</div>
										</dt>
											<dd class="posts"></dd>
											<dd class="posts"></dd>
											<dd class="topics">{{$sum_topic}}<dfn>Total Topics</dfn></dd>
									</dl>
							</li>


						</ul>
					</div>
				</div>

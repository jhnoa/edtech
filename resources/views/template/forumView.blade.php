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
									<span class="arrow sep">&gt;</span>
									<a href="{{ route('forum') }}" >FORUM</a>
							</li>
							<li>
								<span class="accesshide ">
									<span class="arrow_text">/</span>&nbsp;
								</span>
									<span class="arrow sep">&gt;</span>
									<a href="{{ route('forumView') }}" >{{$course}}</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="ebutton"></div>
		</div>

		<div class="forumbg">
					<div class="inner">
			<ul class="topiclist forums" style="padding-left: 0px;" >
							<li class="row">
								<dl class="icon forum_read" style="margin-left: 0px;">
										<dt title="No unread posts">
											<span class="ico_forum_read"></span>
																	<div class="list-inner">
																		<a href="{{ route('forumDetail') }}" class="forumtitle">{{$topic_tittle}}</a>
																			<br>{{$topic_short_content}}
																	</div>
										</dt>
											<dd class="topics"><dfn></dfn></dd>
											<dd class="posts">{{$topic_reply_sum}}<dfn>Replies</dfn></dd>
											<dd class="lastpost">
												by <a href="#" class="username">{{$topic_owner}}</a>
												{{$topic_time}}
											</dd>
									</dl>
							</li>


						</ul>
				</div>
	</div>

						<a href="{{ route('forumCreate') }}" class="button font-icon" title="Post a new topic">
						<i class="fa fa-pencil"></i>New Topic					</a>

<div id="page-content">
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
									<a href="{{ route('forumView') }}" >Nama Matakul n</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="ebutton"></div>
		</div>

		<div class="forumbg">
					<div class="inner">
						<ul class="topiclist">
							<li class="header">
								<dl class="headerstrip">
									<dt><div class="list-inner">Nama Matkul n</div></dt>
								</dl>
							</li>
						</ul>
			<ul class="topiclist forums">
							<li class="row">
								<dl class="icon forum_read">
										<dt title="No unread posts">
											<span class="ico_forum_read"></span>
																	<div class="list-inner">
																		<a href="{{ route('forumDetail') }}" class="forumtitle">Judul Topic 1</a>
																			<br>pejelasan singkat vsoevnskevsensk
																	</div>
										</dt>
											<dd class="topics"><dfn></dfn></dd>
											<dd class="posts">2<dfn>Replies</dfn></dd>
											<dd class="lastpost">
												<dfn>Last post</dfn><a href="#" title="Re: Good topic" class="lastsubject">Re: Good topic</a> <br>
												by <a href="#" class="username">Kamziu</a>
												07 Dec 2015, 21:06
											</dd>
									</dl>
							</li>

							<li class="row">
								<dl class="icon forum_read">
										<dt title="No unread posts">
											<span class="ico_forum_read"></span>
																	<div class="list-inner">
																		<a href="#" class="forumtitle">Judul Topic 2</a>
																			<br>pejelasan singkat vsoevnskevsensk
																	</div>
										</dt>
											<dd class="topics"><dfn></dfn></dd>
											<dd class="posts">2<dfn>Replies</dfn></dd>
											<dd class="lastpost">
												<dfn>Last post</dfn><a href="#" title="Re: Good topic" class="lastsubject">Re: Good topic</a> <br>
												by <a href="#" class="username">Kamziu</a>
												07 Dec 2015, 21:06
											</dd>
									</dl>
							</li

						</ul>
				</div>
	</div>

						<a href="#" class="button font-icon" title="Post a new topic">
						<i class="fa fa-pencil"></i>New Topic					</a>

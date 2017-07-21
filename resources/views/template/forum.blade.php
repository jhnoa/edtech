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
					<ul class="topiclist">
						<li class="header">
							<dl class="headerstrip">
								<dt><div class="list-inner">FORUM</div></dt>
							</dl>
						</li>
					</ul>
					<ul class="topiclist forums">
							<li class="row">
								<dl class="icon forum_read">
										<dt title="No unread posts">
											<span class="ico_forum_read"></span>
																		<a href="{{ route('forumView') }}" class="forumtitle">Nama Matkul 1</a>
										</dt>
											<dd class="posts"></dd>
											<dd class="posts"></dd>
											<dd class="topics">30<dfn>Total Topics</dfn></dd>
									</dl>
							</li>

							<li class="row">
								<dl class="icon forum_read_subforum">
										<dt title="No unread posts">
											<span class="ico_forum_read_subforum"></span>
																	<a href="#" class="forumtitle">Nama Matkul 2</a>
										</dt>
										<dd class="posts"></dd>
										<dd class="posts"></dd>
										<dd class="topics">11<dfn>Total Topics</dfn></dd>
								</dl>
							</li>

							<li class="row">
								<dl class="icon forum_read_subforum">
										<dt title="No unread posts">
											<span class="ico_forum_read_subforum"></span>
																	<a href="#" class="forumtitle">Nama Matkul 3</a>
										</dt>
										<dd class="posts"></dd>
										<dd class="posts"></dd>
										<dd class="topics">9<dfn>Total Topics</dfn></dd>
								</dl>
							</li>

						</ul>
					</div>
				</div>

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
                      <li>
        								<span class="accesshide ">
        									<span class="arrow_text">/</span>&nbsp;
        								</span>
        									<span class="arrow sep">&gt;</span>
        									<a href="{{ route('forumDetail') }}" >{{$topic_tittle}}</a>
        							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="ebutton"></div>
		</div>
<div id="p60" class="post has-profile bg2">
  <div class="inner">
				<dl class="postprofile" id="profile60">
					<dt class="has-profile-rank has-avatar">
						<div class="avatar-container">
								<a href="#" class="avatar"><img class="avatar" src="#" width="80" height="80" alt="User avatar"></a>
            </div>
						     <a href="#" style="color: #AA0000;" class="username-coloured">{{$topic_owner}}</a>
					</dt>
				</dl>

				<div class="postbody">
						<div id="post_content60">
    					<h3 class="first"><a href="#">{{$topic_tittle}}</a></h3>
    					<p class="author"><a href="#">{{$topic_time}}</a> </p>
					<div class="content">{{$topic_content}}</div>

						</div>
				</div>
		</div>
  </div>

	<div id="p70" class="post has-profile bg1">
		<div class="inner">
			<dl class="postprofile" id="profile70">
				<dt class="no-profile-rank has-avatar">
					<div class="avatar-container">
						<a href="#" class="avatar"><img class="avatar" src="#" width="80" height="80" alt="User avatar"></a>
					</div>
							<a href="#" class="username">{{$reply_owner}}</a>
				</dt>
				</dl>
					<div class="postbody">
							<div id="post_content70">

										<p class="author"><a href="#">{{$reply_time}}</a> </p>
											<div class="content">{{$reply_conten}}</div>
							</div>
					</div>
			</div>
		</div>


		<div id="message-box">
				<textarea name="message" id="message" rows="15" cols="76" tabindex="4" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onfocus="initInsertions();" class="inputbox" style="position: relative;"></textarea>
		</div>

<input type="submit" accesskey="s" tabindex="6" name="post" value="submit post" class="button font-icon" style="margin-top: 20px;">

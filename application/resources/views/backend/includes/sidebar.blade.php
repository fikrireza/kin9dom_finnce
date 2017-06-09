<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="{{ route('admin.home') }}" class="site_title"> <span>Kingdom Finance</span></a>
		</div>

		<div class="clearfix"></div>

		<div class="profile">
			<div class="profile_pic">
				<img src="{{ asset(Auth::user()->avatar != '' ? Auth::user()->avatar : 'backend/images/user.png') }}" alt="..." class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Hai,</span>
				<h2>{{ Auth::user()->name }}</h2>
			</div>
		</div>

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>General</h3>
				<ul class="nav side-menu">
					<li class=""><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home </a></li>
					<li class="">
						<a>
							<i class="fa fa-beer"></i>Page Management<span class="fa fa-chevron-down"></span>
						</a>
						<ul class="nav child_menu" style="">
							<li class=""><a href="{{ route('admin.page') }}">Content Management</a></li>
							<li class=""><a href="{{ route('admin.pageImage') }}">Image Management</a></li>
						</ul>
					</li>
					<li class="">
						<a href="{{ route('admin.event') }}"><i class="fa fa-calendar"></i>Event Management</a>
					</li>
					
					<li class="">
						<a href="{{ route('admin.gallery') }}"><i class="fa fa-picture-o"></i>Gallery Management</a>
					</li>
					<li class="">
						<a><i class="fa fa-newspaper-o"></i>Article Management<span class="fa fa-chevron-down"></a>
						<ul class="nav child_menu" style="">
							<li class=""><a href="{{ route('admin.article') }}">Article Management</a></li>
							<li class=""><a href="{{ route('admin.article.category') }}">Category Management</a></li>
						</ul>
					</li>
					<li class="">
						<a href="{{ route('admin.meta') }}"><i class="fa fa-eye"></i>Meta Management</a>
					</li>
					<li class="">
						<a href="{{ route('admin.partner') }}"><i class="fa fa-handshake-o"></i>Partner Management</a>
					</li>
					<li class="">
						<a href="{{ route('admin.social') }}"><i class="fa fa-globe"></i>Social Management</a>
					</li>
					<li class="">
						<a href="{{ route('admin.user') }}"><i class="fa fa-users"></i>User Management</a>
					</li>
					<li class="">
						<a href="{{ route('admin.website') }}"><i class="fa fa-cogs"></i>Configuration</a>
					</li>
					<li class="">
						<a href="{{ route('admin.inbox') }}"><i class="fa fa-inbox"></i>Inbox</a>
					</li>
				</ul>
			</div>

		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a href="{{ route('admin.user') }}" data-toggle="tooltip" data-placement="top" title="Users">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			</a>
			<a href="{{ route('admin.inbox') }}" data-toggle="tooltip" data-placement="top" title="Inbox">
				<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			</a>
			<a href="{{ route('admin.website') }}" data-toggle="tooltip" data-placement="top" title="Profile">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a href="{{ route('admin.logout') }}" data-toggle="tooltip" data-placement="top" title="Logout">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>

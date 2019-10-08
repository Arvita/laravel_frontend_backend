<div class="navbar-content">
	<div class="main-navigation navbar-collapse collapse">
		<div class="navigation-toggler"><i class="clip-chevron-left"></i><i class="clip-chevron-right"></i></div>
		<ul class="main-navigation-menu">
			<li  class="{{ isset($m_dashboard)? $m_dashboard : '' }}">
				<a href="{{ url('/') }}"><i class="clip-home-3"></i>
					<span class="title"> Dashboard </span><span class="selected"></span>
				</a>
			</li>
			{{-- <li  class="{{ isset($m_by)? $m_by : '' }}">
				<a href="{{ url('biaya') }}"><i class="clip-pencil"></i>
					<span class="title"> Costs </span><span class="selected"></span>
				</a>
			</li> --}}
			<!-- <li  class="{{ isset($m_bya)? $m_bya : '' }}">
				<a href="{{ url('biayaall') }}"><i class="clip-pencil"></i>
					<span class="title"> Costs All</span><span class="selected"></span>
				</a>
			</li> -->
			<li class="{{ isset($m_ms)? $m_ms : '' }}">
				<a href="javascript:void(0)"><i class="clip-cog-2"></i><span class="title"> Setting </span><i class="icon-arrow"></i><span class="selected"></span></a>
				<ul class="sub-menu">
					<li class="{{ isset($sm_ms_user)? $sm_ms_user : '' }}"><a href="{{ url('/user')}}"><span class="title">User</span></a></li>
					
				</ul>
			</li>
		</ul>
	<!-- end: MAIN NAVIGATION MENU -->
	</div>
</div>

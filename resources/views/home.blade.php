@extends('backend/layouts.template')

@section('content')
<div class="main-content">
	<div class="container">
		<!-- start: Breadcrumb and Title -->
		<div class="row">
			<div class="col-sm-12">

				<ol class="breadcrumb">
					<li><i class="clip-home-3"></i><a href="{{ url('/') }}"> Home</a></li>
					<li class="active">Dashboard </li>
				</ol>

				<div class="page-header">
					<h1>Dashboard <small>overview &amp; stats </small></h1>
				</div>
			</div>
		</div>
		<!-- end: Breadcrumb and Title -->

		<!-- start: PAGE CONTENT -->
        <div class="row">
			<div class="col-sm-4">
				<div class="core-box">
					<div class="heading">
						<i class="clip-user-4 circle-icon circle-green"></i>
						<h2>Manage Users</h2>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>
					<a class="view-more" href="#">
						View More <i class="clip-arrow-right-2"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="core-box">
					<div class="heading">
						<i class="clip-clip circle-icon circle-teal"></i>
						<h2>Manage Orders</h2>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>
					<a class="view-more" href="#">
						View More <i class="clip-arrow-right-2"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="core-box">
					<div class="heading">
						<i class="clip-database circle-icon circle-bricky"></i>
						<h2>Manage Data</h2>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>
					<a class="view-more" href="#">
						View More <i class="clip-arrow-right-2"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<ul class="mini-stats col-sm-12">
					<li class="col-sm-2">
						<div class="sparkline_bar_good">
							<span>3,5,9,8,13,11,14</span>+10%
						</div>
						<div class="values">
							<strong>18304</strong>
							Visits
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_neutral">
							<span>20,15,18,14,10,12,15,20</span>0%
						</div>
						<div class="values">
							<strong>3833</strong>
							Unique Visitors
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_bad">
							<span>4,6,10,8,12,21,11</span>+50%
						</div>
						<div class="values">
							<strong>18304</strong>
							Pageviews
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_good">
							<span>3,5,9,8,13,11,14</span>+10%
						</div>
						<div class="values">
							<strong>18304</strong>
							Visits
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_neutral">
							<span>20,15,18,14,10,12,15,20</span>0%
						</div>
						<div class="values">
							<strong>3833</strong>
							Unique Visitors
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_bad">
							<span>4,6,10,8,12,21,11</span>+50%
						</div>
						<div class="values">
							<strong>18304</strong>
							Pageviews
						</div>
					</li>
				</ul>
			</div>
		</div>
        <!-- end: PAGE CONTENT-->
      </div>
    </div>
</div>
@endsection
-header">
					<h1>Dashboard <small>overview &amp; stats </small></h1>
				</div>
			</div>
		</div>
		<!-- end: Breadcrumb and Title -->

		<!-- start: PAGE CONTENT -->
        <div class="row">
			<div class="col-sm-4">
				<div class="core-box">
					<div class="heading">
						<i class="clip-user-4 circle-icon circle-green"></i>
						<h2>Manage Users</h2>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>
					<a class="view-more" href="#">
						View More <i class="clip-arrow-right-2"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="core-box">
					<div class="heading">
						<i class="clip-clip circle-icon circle-teal"></i>
						<h2>Manage Orders</h2>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>
					<a class="view-more" href="#">
						View More <i class="clip-arrow-right-2"></i>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="core-box">
					<div class="heading">
						<i class="clip-database circle-icon circle-bricky"></i>
						<h2>Manage Data</h2>
					</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</div>
					<a class="view-more" href="#">
						View More <i class="clip-arrow-right-2"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<ul class="mini-stats col-sm-12">
					<li class="col-sm-2">
						<div class="sparkline_bar_good">
							<span>3,5,9,8,13,11,14</span>+10%
						</div>
						<div class="values">
							<strong>18304</strong>
							Visits
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_neutral">
							<span>20,15,18,14,10,12,15,20</span>0%
						</div>
						<div class="values">
							<strong>3833</strong>
							Unique Visitors
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_bad">
							<span>4,6,10,8,12,21,11</span>+50%
						</div>
						<div class="values">
							<strong>18304</strong>
							Pageviews
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_good">
							<span>3,5,9,8,13,11,14</span>+10%
						</div>
						<div class="values">
							<strong>18304</strong>
							Visits
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_neutral">
							<span>20,15,18,14,10,12,15,20</span>0%
						</div>
						<div class="values">
							<strong>3833</strong>
							Unique Visitors
						</div>
					</li>
					<li class="col-sm-2">
						<div class="sparkline_bar_bad">
							<span>4,6,10,8,12,21,11</span>+50%
						</div>
						<div class="values">
							<strong>18304</strong>
							Pageviews
						</div>
					</li>
				</ul>
			</div>
		</div>
        <!-- end: PAGE CONTENT-->
      </div>
    </div>
</div>
@endsection

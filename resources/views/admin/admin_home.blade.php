@extends('admin.dashboard')
@section('admin_content')

<div class="app-page-title">
	<div class="page-title-wrapper">
		<div class="page-title-heading">
			<div class="page-title-icon">
				<i class="fa fa-home">
				</i>
			</div>
			<div>Dashboard
				<div class="page-title-subheading">
				WAATPB , At a glance 
				</div>
			</div>
		</div>
		<div class="page-title-actions">
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-xl-4">
		<div class="card mb-3 widget-content bg-midnight-bloom">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Members</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_member')->count()}}</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card mb-3 widget-content bg-arielle-smile">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Jobs</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_job')->count()}}</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card mb-3 widget-content bg-grow-early">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Events</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_event')->count()}}</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card mb-3 widget-content bg-grow-early">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Member requests</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_member')->where('status',0)->count()}}</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card mb-3 widget-content bg-midnight-bloom">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Images</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_gallary')->count()}}</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xl-4">
		<div class="card mb-3 widget-content bg-arielle-smile">
			<div class="widget-content-wrapper text-white">
				<div class="widget-content-left">
					<div class="widget-heading">Total Services</div>
				</div>
				<div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{DB::table('tbl_service')->count()}}</span></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
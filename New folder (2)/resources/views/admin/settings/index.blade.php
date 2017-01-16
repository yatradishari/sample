@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Settings</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-4">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Setting Key</th>
								<th>Setting Value</th>								
								<th>Visibility</th>								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($settings as $setting)
								<tr>
									<td>3326</td>									
									<td>{{ $setting->settings_key }}</td>
									<td>{{ $setting->settings_value }}</td>
									<td>
										@if($setting->status==1)
											<button class="btn btn-success btn-xs" type="button">Visible</button>
										@else
											<button class="btn btn-danger btn-xs" type="button">Not Visible</button>
										@endif									
									</td>									
									<td>
										<p>
											<a href="{{ URL::to('/admin/settings/edit/'.$setting->id) }}">
												<button class="btn btn-primary btn-xs" type="button">Edit</button>
											</a>
										</p>										
									</td>
								</tr>
							@endforeach
							<tr>
								<td colspan="6">									
									<button class="btn btn-primary" type="button" onclick="window.location.href='setting/create'">Add</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.col-lg-4 (nested) -->
			<div class="col-lg-8">
				<div id="morris-bar-chart"></div>
			</div>
			<!-- /.col-lg-8 (nested) -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.panel-body -->
</div>
</div>
@endsection

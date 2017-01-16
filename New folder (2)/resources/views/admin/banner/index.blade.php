@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">banner</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-8">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Image</th>
								<th>Order</th>								
								<th>Visibility</th>								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($banners as $banner)
								<tr>
									<td>3326</td>
									<td>
										@if(!isset($banner->banners_name))											
											<img src="{{asset('public/admin/images/no_image.png')}}" width="80"  alt="{{ $banner->location_name}}">
										@else
											
											<img src="../public/uploads/banners/<?php echo $banner->banners_name;?>" width="80"  >
										@endif
									</td>
									<td>{{ $banner->display_order }}</td>									
									<td>
										@if($banner->status==1)
											<button class="btn btn-success btn-xs" type="button">Visible</button>
										@else
											<button class="btn btn-danger btn-xs" type="button">Not Visible</button>
										@endif									
									</td>																	
									<td>
										<p>
											<a href="{{ URL::to('/admin/banner/edit/'.$banner->id) }}">
												<button class="btn btn-primary btn-xs" type="button">Edit</button>
											</a>
										</p>
										<p>
											<a onclick="return confirm('Are you sure?')" href="{{ URL::to('/admin/banner/delete/'.$banner->id) }}">
												<button class="btn btn-danger btn-xs" type="button">Delete</button>
											</a>
										</p>									
										<p>											
											<a href="{{ URL::to('/admin/banner/uploadimage/'.$banner->id) }}	">
												<button class="btn btn-primary btn-xs" type="button">Add Image</button>
											</a>
										</p>
									</td>
								</tr>
							@endforeach
							<tr>
								<td colspan="6">									
									<button class="btn btn-primary" type="button" onclick="window.location.href='banner/create'">Add</button>
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

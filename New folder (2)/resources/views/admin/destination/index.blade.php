@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Destination</h1>
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
								<th>Image</th>
								<th>State</th>
								<th>Location Name</th>
								<th>Visibility</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($destinations as $destination)
								<tr>
									<td>3326</td>
									<td>
										@if(!isset($destination->primary_image->image_name))											
											<img src="{{asset('public/admin/images/no_image.png')}}" width="80"  alt="{{ $destination->location_name}}">
										@else
											
											<img src="../public/uploads/<?php echo $destination->primary_image->image_name;?>" width="80"  >
										@endif
									</td>
									<td>{{ $destination->state_name->name }}</td>
									<td>{{ $destination->location_name }}</td>
									<td>
										@if($destination->visibility==1)
											<button class="btn btn-success btn-xs" type="button">Visible</button>
										@else
											<button class="btn btn-danger btn-xs" type="button">Not Visible</button>
										@endif									
									</td>
									<td>{{ short($destination->description,50) }}</td>
									<td>
										<p>
											<a href="{{ URL::to('/admin/destination/edit/'.$destination->id) }}">
												<button class="btn btn-primary btn-xs" type="button">Edit</button>
											</a>
										</p>
										<p>
											<a onclick="return confirm('Are you sure?')" href="{{ URL::to('/admin/destination/delete/'.$destination->id) }}">
												<button class="btn btn-danger btn-xs" type="button">Delete</button>
											</a>
										</p>										
										<p><button class="btn btn-primary btn-xs" type="button">Add Image</button></p>
									</td>
								</tr>
							@endforeach
							<tr>
								<td colspan="6">									
									<button class="btn btn-primary" type="button" onclick="window.location.href='destination/create'">Add</button>
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

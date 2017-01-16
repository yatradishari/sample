@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"></h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				gg
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form action="stroreimage" role="form" name="add_destination" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">							
							<div class="form-group">
								<label>State</label>
								<select name="destination_id" class="form-control">
									@foreach($destinations as $destination)
									<option value="{{ $destination->id }}">{{ $destination->location_name }}</option>
									@endforeach									
								</select>
							</div>
							<div class="form-group">
								<label>Upload image</label>
								<input type="file" name="destination_image" value="" class="form-control">								
							</div>
							
							
							<button type="submit" class="btn btn-primary">Submit Button</button>
							<button type="reset" class="btn btn-primary">Reset Button</button>
						</form>
					</div>					
				</div>
				<!-- /.row (nested) -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
@endsection

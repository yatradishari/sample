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
				Create Destination
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form action="store" role="form" name="add_destination" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<label>State</label>
								<select name="state_id" class="form-control">
									@foreach($states as $state)
									<option value="{{ $state->id }}">{{ $state->name }}</option>
									@endforeach									
								</select>
							</div>
							<div class="form-group">
								<label>Location Name</label>
								<input type="text" name="location_name" value="" class="form-control">								
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea name="description" class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>How To Reach</label>
								<textarea name="how_to_reach" class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>When To Visit</label>
								<textarea name="when_to_visit" class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Visibility</label>
								<div class="radio">
									<label>
										<input type="radio" name="visibility" id="visibility1" value="1" checked>Visible
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="visibility" id="visibility2" value="0">Not Visible
									</label>
								</div>								
							</div>
							<div class="form-group">
								<label>Type</label>
								<div class="radio">
									<label>
										<input type="radio" name="type" id="type1" value="1" checked>Offbeat
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="type" id="type2" value="2">Popular
									</label>
								</div>								
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

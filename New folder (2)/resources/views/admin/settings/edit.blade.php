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
				Create settings
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">						
						{!! Form::open(array('url' =>  ['admin/settings/update'], 'files' => true , 'id'=>'update_settings', 'role'=>'form', 'method' => 'post')) !!}
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="id" value="{{ $id }}">							
							<div class="form-group">
								<label>Settings Key</label>
								<input type="text" name="settings_key" value="{{ $settings->settings_key }}" class="form-control">								
							</div>
							<div class="form-group">
								<label>Settings Value</label>
								<input type="text" name="settings_value" value="{{ $settings->settings_value }}" class="form-control">	
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

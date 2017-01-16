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
						<form action="store" role="form" name="add_banner" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">	
							<div class="form-group">
								<label>Upload image</label>
								<input type="file" name="banners_name" value="" class="form-control">								
							</div>
							<div class="form-group">
								<label>Order</label>
								<input type="text" name="display_order" value="" class="form-control">								
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

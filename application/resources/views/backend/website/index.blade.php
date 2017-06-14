@extends('backend.layout.master')

@section('title')
	Website Configuration
@endsection

@section('script')
<script src="{{ asset('backend/vendors/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'address' );
    CKEDITOR.replace( 'phone' );
    CKEDITOR.replace( 'email' );

</script>
@endsection

@section('content')

	<h1>Website Configuration</h1>
	<div class="x_panel" style="overflow: auto;">
		<form class="form-horizontal form-label-left" action="{{ route('admin.website.store') }}" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="website" class="control-label col-md-3 col-sm-3 col-xs-12">Website Name
				</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" id="website" name="website" class="form-control" value="{{ isset($index->website) ? $index->website : '' }}">
				</div>
			</div>
			<div class="form-group">
				<label for="company" class="control-label col-md-3 col-sm-3 col-xs-12">Company Name
				</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" id="company" name="company" class="form-control" value="{{ isset($index->company) ? $index->company : '' }}">
				</div>
			</div>
			<div class="form-group">
				<label for="brief" class="control-label col-md-3 col-sm-3 col-xs-12">Brief Company
				</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" id="brief" name="brief" class="form-control" value="{{ isset($index->brief) ? $index->brief : '' }}">
				</div>
			</div>
			<div class="form-group">
				<label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<textarea class="form-control" id="address" name="address" rows="5">{{ isset($index->address) ? $index->address : '' }}</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">Phone
				</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<textarea class="form-control" id="phone" name="phone" rows="5">{{ isset($index->phone) ? $index->phone : '' }}</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email
				</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<textarea class="form-control" id="email" name="email" rows="5">{{ isset($index->email) ? $index->email : '' }}</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="google_map_url" class="control-label col-md-3 col-sm-3 col-xs-12">Google Map Url
				</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" id="google_map_url" name="google_map_url" class="form-control" value="{{ isset($index->google_map_url) ? $index->google_map_url : '' }}">
				</div>
			</div>
			
			<div class="ln_solid"></div>
			<div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					{{ csrf_field() }}
					<a class="btn btn-primary" href="{{ route('admin.website') }}">Cancel</a>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>

		</form>
	</div>
	

@endsection
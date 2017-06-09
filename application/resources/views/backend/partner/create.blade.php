@extends('backend.layout.master')

@section('title')
	Partner Management - Create
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('backend/vendors/moment/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" />

<script type="text/javascript" src="{{ asset('backend/vendors/ckeditor/ckeditor.js') }}"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'short_description' );

	$(function() {
	    $('input[name="date"]').daterangepicker({
	    	locale: {
		      format: 'DD MMMM YYYY'
		    },
	        singleDatePicker: true,
	        showDropdowns: true
	    });
	});
</script>
@endsection

@section('content')

	<h1>Partner Management - Create</h1>

	<form class="form-horizontal form-label-left" action="{{ route('admin.partner.store') }}" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label for="for" class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required">*</span>
			</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="for" name="name" class="form-control {{$errors->first('name') != '' ? 'parsley-error' : ''}}" value="{{ old('name') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('name') }}</li>
				</ul>
			</div>
			
		</div>
		<div class="form-group">
			<label for="link" class="control-label col-md-3 col-sm-3 col-xs-12">Link
			</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="link" name="link" class="form-control {{$errors->first('link') != '' ? 'parsley-error' : ''}}" value="{{ old('link') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('link') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="file" id="image" name="image" class="form-control {{$errors->first('image') != '' ? 'parsley-error' : ''}}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('image') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="priority" class="control-label col-md-3 col-sm-3 col-xs-12">Priority</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="priority" name="priority" class="form-control {{$errors->first('priority') != '' ? 'parsley-error' : ''}}" value="{{ old('priority') == '' ? 0 : old('priority')}}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('priority') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="flag_publish" class="control-label col-md-3 col-sm-3 col-xs-12">Publish</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<select id="flag_publish" name="flag_publish" class="form-control {{$errors->first('flag_publish') != '' ? 'parsley-error' : ''}}">
					<option value="1" @if(old('flag_publish') != '' && old('flag_publish') == 1) selected @endif>Enable</option>
					<option value="0" @if(old('flag_publish') != '' && old('flag_publish') == 0) selected @endif>Disable</option>
				</select>
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('flag_publish') }}</li>
				</ul>
			</div>
		</div>

		<div class="ln_solid"></div>
		<div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				{{ csrf_field() }}
				<a class="btn btn-primary" href="{{ route('admin.partner') }}">Cancel</a>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>

	</form>

@endsection
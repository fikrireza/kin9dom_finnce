@extends('backend.layout.master')

@section('title')
	Event Management - Edit
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('backend/vendors/moment/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" />

<script src="{{ asset('backend/vendors/ckeditor/ckeditor.js') }}"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'short_description' );

    function autoUrl(from, to)
	{

		temp = document.getElementById(from).value;
		temp = temp.toLowerCase();
		temp = temp.replace(/ /g, "-");
		temp = encodeURI(temp);

		if(temp != '')
		{
			document.getElementById(to).value = temp;
		}
	}

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

	<h1>Event Management - Edit</h1>

	<form class="form-horizontal form-label-left" action="{{ route('admin.event.update', ['id' => $index->id]) }}" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required">*</span>
			</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="for" name="name" class="form-control {{$errors->first('name') != '' ? 'parsley-error' : ''}}" value="{{ old('name') == '' ? $index->name : old('name') }}" onchange="autoUrl(this.id, 'slug');">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('name') }}</li>
				</ul>
			</div>
			
		</div>
		<div class="form-group">
			<label for="slug" class="control-label col-md-3 col-sm-3 col-xs-12">Slug <span class="required">*</span>
			</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="slug" name="slug" class="form-control {{$errors->first('slug') != '' ? 'parsley-error' : ''}}" value="{{ old('slug') == '' ? $index->slug : old('slug') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('slug') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description / Content</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<textarea class="form-control {{$errors->first('description') != '' ? 'parsley-error' : ''}}" name="description" id="description">{{ old('description') == '' ? $index->description : old('description') }}</textarea>
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('description') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="short_description" class="control-label col-md-3 col-sm-3 col-xs-12">Short Description</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<textarea class="form-control {{$errors->first('short_description') != '' ? 'parsley-error' : ''}}" name="short_description" id="short_description">{{ old('short_description') == '' ? $index->short_description : old('short_description') }}</textarea>
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('short_description') }}</li>
				</ul>
			</div>
		</div>

		<div class="form-group">
			<label for="date" class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="date" name="date" class="form-control {{$errors->first('date') != '' ? 'parsley-error' : ''}}" value="{{ old('date') == '' ? date('d F Y', strtotime($index->date)) : date('d F Y', strtotime(old('date'))) }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('date') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="time" class="control-label col-md-3 col-sm-3 col-xs-12">Time</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="time" name="time" class="form-control {{$errors->first('time') != '' ? 'parsley-error' : ''}}" value="{{ old('time') == '' ? $index->time : old('time') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('time') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="location" class="control-label col-md-3 col-sm-3 col-xs-12">Location</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="location" name="location" class="form-control {{$errors->first('location') != '' ? 'parsley-error' : ''}}" value="{{ old('location') == '' ? $index->location : old('location') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('location') }}</li>
				</ul>
			</div>
		</div>


		<div class="form-group">
			<label for="image[]" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="file" id="image[]" name="image[]" class="form-control {{$errors->first('image') != '' ? 'parsley-error' : ''}}" multiple>
				@foreach($image as $list)
				<div class="row" style="margin: 10px 0px;">
					<div class="col-xs-6 col-md-3">
						<img src="{{ asset($list->image) }}" style="height: 100px;"/>
					</div>
					<div class="col-xs-6 col-md-9">
						<input type="hidden" name="img_id[]" value="{{ $list->id }}">
						<label for="img_title{{ $list->id }}" class="control-label col-md-2 col-sm-2 col-xs-12">Title</label>
						<div class="col-md-10 col-sm-10 col-xs-12">
							<input type="text" name="img_title[]" id="img_title{{ $list->id }}" value="{{ $list->title }}" class="form-control">
						</div>

						<label for="img_priority{{ $list->id }}" class="control-label col-md-2 col-sm-2 col-xs-12">Priority</label>
						<div class="col-md-10 col-sm-10 col-xs-12">
							<input type="text" name="img_priority[]" id="img_priority{{ $list->id }}" value="{{ $list->priority }}" class="form-control">
						</div>

						<label for="img_{{ $list->id }}" class="control-label col-md-2 col-sm-2 col-xs-12"></label>
						<div class="col-md-10 col-sm-10 col-xs-12">
							<input type="checkbox" name="remove_image[]" id="img_{{ $list->id }}" value="{{ $list->id }}">
							<label for="img_{{ $list->id }}">Remove Image</label>
						</div>
						
					</div>
				</div>
				@endforeach
				
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('image') }}</li>
				</ul>
			</div>
				
		</div>
		<div class="form-group">
			<label for="flag_publish" class="control-label col-md-3 col-sm-3 col-xs-12">Publish</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<select id="flag_publish" name="flag_publish" class="form-control {{$errors->first('flag_publish') != '' ? 'parsley-error' : ''}}">
					<option value="1" @if($index->flag_publish == 1) selected @endif>Enable</option>
					<option value="0" @if($index->flag_publish == 0) selected @endif>Disable</option>
				</select>
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('flag_publish') }}</li>
				</ul>
			</div>
		</div>
		
		<div class="ln_solid"></div>
		<h2>Meta Data</h2>

		<div class="form-group">
			<label for="meta_title" class="control-label col-md-3 col-sm-3 col-xs-12">Meta Title</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="meta_title" name="meta_title" class="form-control {{$errors->first('meta_title') != '' ? 'parsley-error' : ''}}" value="{{ old('meta_title') == '' ? $index->meta_title : old('meta_title') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('meta_title') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="meta_description" class="control-label col-md-3 col-sm-3 col-xs-12">Meta Description</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<textarea class="form-control {{$errors->first('meta_description') != '' ? 'parsley-error' : ''}}" name="meta_description" id="meta_description">{{ old('meta_description') == '' ? $index->meta_description : old('meta_description') }}</textarea>
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('meta_description') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="meta_image" class="control-label col-md-3 col-sm-3 col-xs-12">Meta Image</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="file" id="meta_image" name="meta_image" class="form-control {{$errors->first('meta_image') != '' ? 'parsley-error' : ''}}">
				@if($index->meta_image != '')
					<img src="{{ asset($index->meta_image) }}" style="height: 100px;"/>
					<input type="checkbox" name="remove_meta_image"> Remove Meta Image
				@endif
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('meta_image') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="meta_url" class="control-label col-md-3 col-sm-3 col-xs-12">Meta URL</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="meta_url" name="meta_url" class="form-control {{$errors->first('meta_url') != '' ? 'parsley-error' : ''}}" value="{{ old('meta_url') == '' ? $index->meta_url : old('meta_url') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('meta_url') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="meta_keyword" class="control-label col-md-3 col-sm-3 col-xs-12">Meta Keyword</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="meta_keyword" name="meta_keyword" class="form-control {{$errors->first('meta_keyword') != '' ? 'parsley-error' : ''}}" value="{{ old('meta_keyword') == '' ? $index->meta_keyword : old('meta_keyword') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('meta_keyword') }}</li>
				</ul>
			</div>
		</div>

		<div class="ln_solid"></div>
		<div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				{{ csrf_field() }}
				<a class="btn btn-primary" href="{{ route('admin.event') }}">Cancel</a>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>

	</form>

@endsection
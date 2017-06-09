@extends('backend.layout.master')

@section('title')
	Meta Management - Edit
@endsection

@section('script')

@endsection

@section('content')

	<h1>Meta Management - Edit</h1>

	<form class="form-horizontal form-label-left" action="{{ route('admin.meta.update', ['id' => $index->id]) }}" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="for" class="control-label col-md-3 col-sm-3 col-xs-12">For</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="for" name="for" class="form-control {{$errors->first('for') != '' ? 'parsley-error' : ''}}" value="{{ old('for') == '' ? $index->for : old('for') }}" disabled>
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('for') }}</li>
				</ul>
			</div>
		</div>
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
					<input type="checkbox" name="remove_meta_image"> Remove Logo
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
				<a class="btn btn-primary" href="{{ route('admin.meta') }}">Cancel</a>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>

	</form>

@endsection
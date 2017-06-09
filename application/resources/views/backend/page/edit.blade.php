@extends('backend.layout.master')

@section('title')
	Content Management - Edit
@endsection

@section('script')
<script src="{{ asset('backend/vendors/ckeditor/ckeditor.js') }}"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'description' );
</script>
@endsection

@section('content')

	<h1>Content Management - Edit</h1>

	<form id="demo-form2" class="form-horizontal form-label-left" action="{{ route('admin.page.update', ['id' => $index->id ]) }}" method="post">

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="for">For
			</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="for" class="form-control col-md-12 col-xs-12" disabled value="{{ $index->for }}">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title
			</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="title" name="title" class="form-control col-md-12 col-xs-12" value="{{ $index->title }}">
			</div>
		</div>
		<div class="form-group">
			<label for="subtitle" class="control-label col-md-3 col-sm-3 col-xs-12">Subtitle</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input id="subtitle" class="form-control col-md-12 col-xs-12" type="text" name="subtitle" value="{{ $index->subtitle }}">
			</div>
		</div>
		<div class="form-group">
			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description / Content</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<textarea class="form-control col-md-12 col-xs-12" name="description" id="description">{{ $index->description }}</textarea>
			</div>
		</div>
		
		
		<div class="ln_solid"></div>
		<div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				{{ csrf_field() }}
				<button type="submit" class="btn btn-primary">Cancel</button>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>

	</form>

@endsection
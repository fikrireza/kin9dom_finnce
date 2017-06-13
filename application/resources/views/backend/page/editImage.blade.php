@extends('backend.layout.master')

@section('title')
	Image Content Management - Edit
@endsection

@section('script')
@endsection

@section('content')

	<h1>Image Content Management - Edit</h1>
	<div class="x_panel">
		<form id="demo-form2" class="form-horizontal form-label-left" action="{{ route('admin.pageImage.update', ['id' => $index->id ]) }}" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="for">For
				</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" id="for" class="form-control col-md-12 col-xs-12" disabled value="{{ $index->for }}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image
				</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="file" id="image" name="image" class="form-control {{$errors->first('image') != '' ? 'parsley-error' : ''}}">
					@if($index->image != '')
					<div style="width: 300px; height: 250px;background-image: url('{{ asset($index->image) }}');background-size: cover;background-position: center;"></div>
					<input type="checkbox" name="remove_image"> Remove Image
					@endif
					<ul class="parsley-errors-list filled">
						<li class="parsley-required">{{ $errors->first('image') }}</li>
					</ul>
				</div>
			</div>		
			
			<div class="ln_solid"></div>
			<div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					{{ csrf_field() }}
					<a class="btn btn-primary" href="{{ route('admin.pageImage') }}">Cancel</a>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>

		</form>
	</div>
	

@endsection
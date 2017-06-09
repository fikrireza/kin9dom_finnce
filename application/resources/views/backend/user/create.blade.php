@extends('backend.layout.master')

@section('title')
	User Management - Create
@endsection

@section('script')

@endsection

@section('content')

	<h1>User Management - Create</h1>

	<form class="form-horizontal form-label-left" action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Name <span class="required">*</span>
			</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="for" name="name" class="form-control {{$errors->first('name') != '' ? 'parsley-error' : ''}}" value="{{ old('name') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('name') }}</li>
				</ul>
			</div>
			
		</div>
		<div class="form-group">
			<label for="username" class="control-label col-md-3 col-sm-3 col-xs-12">Username <span class="required">*</span>
			</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="username" name="username" class="form-control {{$errors->first('username') != '' ? 'parsley-error' : ''}}" value="{{ old('username') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('username') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="text" id="email" name="email" class="form-control {{$errors->first('email') != '' ? 'parsley-error' : ''}}" value="{{ old('email') }}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('email') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span></label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="password" id="password" name="password" class="form-control {{$errors->first('password') != '' ? 'parsley-error' : ''}}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('password') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="password_confirmation" class="control-label col-md-3 col-sm-3 col-xs-12">Confirmation Password</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="user_password" class="control-label col-md-3 col-sm-3 col-xs-12">Password User <span class="required">*</span></label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="password" id="user_password" name="user_password" class="form-control {{$errors->first('user_password') != '' ? 'parsley-error' : ''}}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('user_password') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="avatar" class="control-label col-md-3 col-sm-3 col-xs-12">Avatar</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<input type="file" id="avatar" name="avatar" class="form-control {{$errors->first('avatar') != '' ? 'parsley-error' : ''}}">
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('avatar') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="active" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<select id="active" name="active" class="form-control {{$errors->first('active') != '' ? 'parsley-error' : ''}}">
					<option value="1" @if(old('active') != '' && old('active') == 1) selected @endif>Active</option>
					<option value="0" @if(old('active') != '' && old('active') == 0) selected @endif>Inactive</option>
				</select>
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('active') }}</li>
				</ul>
			</div>
		</div>
		<div class="form-group">
			<label for="access" class="control-label col-md-3 col-sm-3 col-xs-12">Access</label>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<select id="access" name="access" class="form-control {{$errors->first('access') != '' ? 'parsley-error' : ''}}">
					<option value="0" @if(old('access') != '' && old('access') == 0) selected @endif>All</option>
					<option value="1" @if(old('access') != '' && old('access') == 1) selected @endif>All, except create user or edit other user</option>
				</select>
				<ul class="parsley-errors-list filled">
					<li class="parsley-required">{{ $errors->first('active') }}</li>
				</ul>
			</div>
		</div>

		<div class="ln_solid"></div>
		<div class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				{{ csrf_field() }}
				<a class="btn btn-primary" href="{{ route('admin.user') }}">Cancel</a>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>

	</form>

@endsection
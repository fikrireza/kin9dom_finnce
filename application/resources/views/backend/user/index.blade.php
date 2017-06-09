@extends('backend.layout.master')

@section('title')
	User Management
@endsection

@section('script')
<script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$(function() {
		$('#datatable-buttons').DataTable();

		$(".check-all").click(function(){
	    	if ($(this).is(':checked'))
	    	{
		        $('.' + $(this).attr('data-target')).prop('checked', true);
		    }
		    else
		    {
		    	$('.' + $(this).attr('data-target')).prop('checked', false);
		    }
	    });
	});
</script>
@endsection

@section('content')

	<h1>User Management</h1>

	@if(Auth::user()->access == 0)
	<form method="post" id="action" action="{{ route('admin.user.action') }}" class="form-inline text-right">
		<a href="{{ route('admin.user.create') }}" class="btn btn-default">Create New</a>
		<select class="form-control" name="action">
			<option value="enable">Active</option>
			<option value="disable">Incative</option>
			<option value="delete">Delete</option>
		</select>
		<button type="submit" class="btn btn-success">Update Selected</button>
	</form>
	@endif

	<table class="table table-striped table-bordered" id="datatable-buttons">
		<thead>
			<tr>
				@if(Auth::user()->access == 0)
				<th width="100">
					<input type="checkbox" data-target="check" class="check-all"> Select All
				</th>
				@endif
				<th>No.</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Status</th>
				<th>Access</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $count=0; @endphp
			@foreach($index as $list)
			<tr>
				@if(Auth::user()->access == 0)
				<td class="a-center ">
					@if(Auth::id() != $list->id)
					<input type="checkbox" class="check" value="{{ $list->id }}" name="id[]" form="action">
					@endif
				</td>
				@endif
				<td>{{ ++$count }}</td>
				<td>{{ $list->name }}</td>
				<td>{{ $list->username }}</td>
				<td>{{ $list->email }}</td>
				<td>{{ $list->active == 1 ? "Active" : "Inactive" }}</td>
				<td>
					@if($list->access == 0)
						All
					@else
						All, except create user or edit other user
					@endif
				</td>	
				<td>
					@if(Auth::user()->access == 0 || Auth::id() == $list->id)
					<a href="{{ route('admin.user.edit', ['id' => $list->id]) }}"><i class="fa fa-pencil"></i></a>
					@endif
					@if(Auth::user()->access == 0 && Auth::id() != $list->id)
					<a href="{{ route('admin.user.delete', ['id' => $list->id]) }}" style="color: red;"><i class="fa fa-times"></i></a>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
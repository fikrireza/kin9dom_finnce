@extends('backend.layout.master')

@section('title')
	Article Category Management
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

	<h1>Article Category Management</h1>

	<form method="post" id="action" action="{{ route('admin.article.actionCategory') }}" class="form-inline text-right">
		<a href="{{ route('admin.article.createCategory') }}" class="btn btn-default">Create New</a>
		<select class="form-control" name="action">
			<option value="enable">Enable</option>
			<option value="disable">Disable</option>
			<option value="delete">Delete</option>
		</select>
		<button type="submit" class="btn btn-success">Update Selected</button>
	</form>

	<table class="table table-striped table-bordered" id="datatable-buttons">
		<thead>
			<tr>
				<th width="100">
					<input type="checkbox" data-target="check" class="check-all"> Select All
				</th>
				<th>No.</th>
				<th>Name</th>
				<th>Slug</th>
				<th>Priority</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $count=0; @endphp
			@foreach($index as $list)
			<tr>
				<td class="a-center ">
					<input type="checkbox" class="check" value="{{ $list->id }}" name="id[]" form="action">
				</td>
				<td>{{ ++$count }}</td>
				<td>{{ $list->name }}</td>
				<td>{{ $list->slug }}</td>
				<td>{{ $list->priority }}</td>
				<td>{{ $list->flag_publish == 1 ? 'Enabled' : 'Disabled' }}</td>		
				<td>
					<a href="{{ route('admin.article.editCategory', ['id' => $list->id]) }}"><i class="fa fa-pencil"></i></a>
					<a href="{{ route('admin.article.deleteCategory', ['id' => $list->id]) }}" style="color: red;"><i class="fa fa-times"></i></a>
				</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>

@endsection
@extends('backend.layout.master')

@section('title')
	Article Category Management
@endsection

@section('script')
<script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$(function() {
		$('#datatable-buttons').DataTable({
			"columnDefs": [
			    { "orderable": false, "targets": 0 }
			]
		});

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
	<div class="x_panel" style="overflow: auto;">
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
					<th width="100" nowrap>
						<input type="checkbox" data-target="check" class="check-all" id="check-all"> <label for="check-all">Select All</label>
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
					<td>
						@if($list->flag_publish == 1)
							<a href="{{ route('admin.article.publishCategory', ['id' => $list->id, 'action' => 0]) }}" class="btn btn-xs btn-success" onclick="return confirm('Disable this data?')"><i class="fa fa-check" aria-hidden="true"></i></a>
						@else
							<a href="{{ route('admin.article.publishCategory', ['id' => $list->id, 'action' => 1]) }}" class="btn btn-xs btn-default" onclick="return confirm('Enable this data?')"><i class="fa fa-times"></i></a>
						@endif
					</td>	
					<td nowrap>
						<a href="{{ route('admin.article.editCategory', ['id' => $list->id]) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
						<a href="{{ route('admin.article.deleteCategory', ['id' => $list->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Delete this data?')"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
	

@endsection
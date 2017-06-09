@extends('backend.layout.master')

@section('title')
	Inbox
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

	<h1>Inbox</h1>

	<form method="post" id="action" action="{{ route('admin.inbox.action') }}" class="form-inline text-right">
		<button type="submit" class="btn btn-success">Delete Selected</button>
	</form>

	<table class="table table-striped table-bordered" id="datatable-buttons">
		<thead>
			<tr>
				<th width="100">
					<input type="checkbox" data-target="check" class="check-all"> Select All
				</th>
				<th>No.</th>
				<th>Time Post</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Messages</th>
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
				<td>{{ date('d F Y H:i:s', strtotime($list->created_at)) }}</td>
				<td>{{ $list->name }}</td>
				<td>{{ $list->email }}</td>
				<td>{{ $list->phone }}</td>
				<td>{{ $list->messages }}</td>
				<td>
					<a href="{{ route('admin.inbox.view', ['id' => $list->id]) }}"><i class="fa fa-eye"></i></a>
					<a href="{{ route('admin.inbox.delete', ['id' => $list->id]) }}" style="color: red;"><i class="fa fa-times"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
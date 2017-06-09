@extends('backend.layout.master')

@section('title')
	Content Management
@endsection

@section('script')
<script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript">
	$(function() {
		$('#datatable-buttons').DataTable({
			responsive: true,
		});
	});
</script>
@endsection

@section('content')
	
    <h1>Content Image Management</h1>
	<table class="table table-striped table-bordered bulk_action" id="datatable-buttons">
		<thead>
			<tr>
				<th>No.</th>
				<th>Content For</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $count=0; @endphp
			@foreach($index as $list)
			<tr>
				<td>{{ ++$count }}</td>
				<td>{{ $list->for }}</td>
				<td>@if($list->image != '')<img src="{{ asset($list->image) }}" style="height: 100px;">@endif</td>
				<td><a href="{{ route('admin.pageImage.edit', ['id' => $list->id]) }}"><i class="fa fa-pencil"></i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
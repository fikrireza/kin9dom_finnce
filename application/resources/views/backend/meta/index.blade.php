@extends('backend.layout.master')

@section('title')
	Meta Management
@endsection

@section('script')
<script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$(function() {
		$('#datatable-buttons').DataTable();
	});
</script>
@endsection

@section('content')

	<h1>Meta Management</h1>
	<div class="x_panel" style="overflow: auto;">
		<table class="table table-striped table-bordered" id="datatable-buttons">
			<thead>
				<tr>
					<th>No.</th>
					<th>For</th>
					<th>Meta Title</th>
					<th>Meta Description</th>
					<th>Meta Image</th>
					<th>Meta URL</th>
					<th>Meta Keyword</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $count=0; @endphp
				@foreach($index as $list)
				<tr>
					<td>{{ ++$count }}</td>
					<td>{{ $list->for }}</td>
					<td>{{ $list->meta_title }}</td>
					<td>{{ $list->meta_description }}</td>
					<td>@if($list->meta_image != '')<img src="{{ asset($list->meta_image) }}" style="height: 100px;"/>@endif</td>
					<td>{{ $list->meta_url }}</td>
					<td>{{ $list->meta_keyword }}</td>
					<td nowrap>
						<a href="{{ route('admin.meta.edit', ['id' => $list->id]) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
					</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
	

@endsection
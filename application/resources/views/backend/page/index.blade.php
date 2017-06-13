@extends('backend.layout.master')

@section('title')
	Content Management
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

	<h1>Content Management</h1>
	<div class="x_panel" style="overflow: auto;">
		<table class="table table-striped table-bordered" id="datatable-buttons">
			<thead>
				<tr>
					<!-- <th width="100">
						<input type="checkbox" data-target="check" class="check-all"> Select All
					</th> -->
					<th>No.</th>
					<th>Content For</th>
					<th>Title</th>
					<th>Subtitle</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $count=0; @endphp
				@foreach($index as $list)
				<tr>
					<!-- <td class="a-center ">
						<input type="checkbox" class="check" value="{{ $list->for }}" name="id[]">
					</td> -->
					<td>{{ ++$count }}</td>
					<td>{{ $list->for }}</td>
					<td>{{ $list->title }}</td>
					<td>{{ $list->subtitle }}</td>
					<td>{!! $list->description !!}</td>
					<td><a href="{{ route('admin.page.edit', ['id' => $list->id]) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a></td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
	

@endsection
@foreach ($event as $list)
<div class="col-md-6">
	@php $eventImage   = App\EventImage::where('id_event', $list->id )->orderBy('priority', 'DESC')->first(); @endphp
	<div class="event-thumbnail" style="background-image: url({{ asset($eventImage['image']) }});">
		
	</div>
	<div class="event-info">
		<h4>{!! $list->name !!}</h4>
		{!! $list->short_description !!}
		<a href="{!! route('event.detail', ['slug' => $list->slug]) !!}">View Event</a>
	</div>    		
</div>
@endforeach
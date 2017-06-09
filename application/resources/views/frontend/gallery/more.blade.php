@foreach ($gallery as $list)
<div class="col-md-4">
	<div class="gallery-album image-border center-block">
		<div style="background-image: url('{!! asset($list->image) !!}');">
			<div class="text-center gallery-info">
				<div class="gallery-box">
					<div>
						
					</div>
				</div>
				<h4>{!! $list->name !!}</h4>
				<p class="date">{!! date('d F Y', strtotime($list->date)) !!}</p>
				<div class="description">
					{!! $list->short_description !!}
				</div>
				<a href="{!! route('gallery.detail', ['slug' => $list->slug]) !!}" class="view-more">
					<img src="{!! asset('amadeo/img/loop.png') !!}"><br>
					View Detail
				</a>
			</div>
		</div>
	</div>
</div>
@endforeach
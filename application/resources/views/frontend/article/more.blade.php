@foreach ($article as $list)
	<div class="col-md-4">
		<div class="article-block">
			<div class="article-img" style="background-image: url({!! asset($list->image) !!})">
				<div class="article-hover">
					<a href="{{ route('article.detail', ['category' => $list->category, 'slug' => $list->slug]) }}">+ View Article</a>
				</div>
				<div class="article-more">
					<a href="{{ route('article.detail', ['category' => $list->category, 'slug' => $list->slug]) }}"><img src="{!! asset('amadeo/img/more-img.png') !!}" style="width: 45px;"/></a>
				</div>
			</div>
			<div class="article-description">
				<h4>
					{!! $list->name !!}
				</h4>
				{!! $list->short_description !!}
			</div>
		</div>
	</div>
@endforeach
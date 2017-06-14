<div class="container-fluid">
    <div class="row">
        @foreach($category as $list)
        <div class="col-md-3 col-xs-6 text-center padding-zero article-panel">
            <div class="article-block-hover">
                <img class="article-logo" src="{!! asset($list->logo) !!}"/>
                <h4>
                    {!! $list->name !!}
                </h4>
                {!! $list->short_description !!}
                <div class="hidden-idle">
                    <a class="button-link" href="{!! route('article.category', ['category' => $list->slug]) !!}">
                        More
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
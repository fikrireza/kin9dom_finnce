@php
    $website     = App\Website::first();
    $navCategory = App\ArticleCategory::take(4)->orderBy('id', 'DESC')->orderBy('priority', 'DESC')->where('flag_publish', 1)->get();
    $navEvent = App\Event::take(4)->orderBy('date', 'DESC')->where('flag_publish', 1)->get();
@endphp

<!DOCTYPE html>
@yield('php')
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        @yield('meta')
        <script src="{!! asset('amadeo/assets/jquery-1.12.2/jquery.min.js') !!}" type="text/javascript">
        </script>
        <script src="{!! asset('amadeo/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js') !!}" type="text/javascript">
        </script>
        <script src="https://www.google.com/recaptcha/api.js">
        </script>
        @yield('script')
        <script src="{!! asset('amadeo/js/main.min.js') !!}" type="text/javascript">
        </script>

        <link href="{!! asset('amadeo/assets/font-awesome-4.7.0/css/font-awesome.min.css') !!}" rel="stylesheet"/>
        <link href="{!! asset('amadeo/font/helvetica.min.css') !!}" rel="stylesheet" type="text/css"/>
        <link href="{!! asset('amadeo/font/sakkal-majalla.min.css') !!}" rel="stylesheet" type="text/css"/>
        <link href="{!! asset('amadeo/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css"/>
        @yield('style')
        <link href="{!! asset('amadeo/css/main.css') !!}" rel="stylesheet" type="text/css"/>
        <title>
            {{ $website->website }} - @yield('title')
        </title>
    </head>
    <body>
        <nav class="nav2">
            <ul class="nav-logo">
                <li>
                    <a href="{!! route('home') !!}">
                        <img class="primary" src="{!! asset('amadeo/img/logo-kfc-nav.png') !!}"/>
                        <img class="secondary" src="{!! asset('amadeo/img/logo-kfc-nav2.png') !!}"/>
                    </a>
                </li>
            </ul>
            <button class="drawer-menu">
                <i aria-hidden="true" class="fa fa-bars">
                </i>
            </button>
            <ul class="menu" style="display: none;">
                <li>
                    <a href="{!! route('home') !!}">
                        Home
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{!! route('about') !!}">
                        About Us
                    </a>
                    <!-- <div class="dropdown-content">
                        <a href="#history">
                            History
                        </a>
                        <a href="#visimisi">
                            Visi & Misi
                        </a>
                    </div> -->
                </li>
                <!-- <li>
                    <a href="#program">
                        Program
                    </a>
                </li> -->
                <li class="dropdown">
                    <a href="{!! route('event') !!}">
                        Event
                    </a>
                    <div class="dropdown-content">
                        @foreach($navEvent as $list)
                        <a href="{!! route('event.detail', ['slug' => $list->slug]) !!}">
                            {!! $list->name !!}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li>
                    <a href="{!! route('gallery') !!}">
                        Gallery
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{!! route('article') !!}">
                        Article
                    </a>
                    <div class="dropdown-content">
                        @foreach($navCategory as $list)
                        <a href="{!! route('article.category', ['category' => $list->slug]) !!}">
                            {!! $list->name !!}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li>
                    <a href="#contact">
                        Contact Us
                    </a>
                </li>
            </ul>
        </nav>
        
        <div style="height: 700px; padding-top: 70px;">
        	<p>
	        	Thank You
	        </p>
        </div>
        

		
        <div class="container-fluid text-center base-color-darkest" id="footer">
            © Copyright 2017 All Rights Reserved
        </div>
    </body>
</html>

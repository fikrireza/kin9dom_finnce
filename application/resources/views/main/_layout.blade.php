<!DOCTYPE html>
@yield('php')
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        @yield('meta')
        <script src="{!! asset('assets/jquery-1.12.2/jquery.min.js') !!}" type="text/javascript">
        </script>
        <script src="{!! asset('assets/bootstrap-3.3.7-dist/js/bootstrap.min.js') !!}" type="text/javascript">
        </script>
        <script src="https://www.google.com/recaptcha/api.js">
        </script>
        @yield('script')
        <script src="{!! asset('js/main.min.js') !!}" type="text/javascript">
        </script>

        <link href="{!! asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') !!}" rel="stylesheet"/>
        <link href="{!! asset('font/helvetica.min.css') !!}" rel="stylesheet" type="text/css"/>
        <link href="{!! asset('font/sakkal-majalla.min.css') !!}" rel="stylesheet" type="text/css"/>
        <link href="{!! asset('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css"/>
        @yield('style')
        <link href="{!! asset('css/main.min.css') !!}" rel="stylesheet" type="text/css"/>
        <title>
            Kingdom Finance - @yield('title')
        </title>
    </head>
    <body>
        <nav class="nav2">
            <ul class="nav-logo">
                <li>
                    <a href="home">
                        <img class="primary" src="{!! asset('img/logo-kfc-nav.png') !!}"/>
                        <img class="secondary" src="{!! asset('img/logo-kfc-nav2.png') !!}"/>
                    </a>
                </li>
            </ul>
            <button class="drawer-menu">
                <i aria-hidden="true" class="fa fa-bars">
                </i>
            </button>
            <ul class="menu" style="display: none;">
                <li>
                    <a href="{!! url('home') !!}">
                        Home
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{!! url('about') !!}">
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
                <li>
                    <a href="{!! url('event') !!}">
                        Event
                    </a>
                </li>
                <li>
                    <a href="{!! url('gallery') !!}">
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="#article">
                        Article
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        Contact Us
                    </a>
                </li>
            </ul>
        </nav>
        @yield('content')

		@include('main._include.contact')
        <div class="container-fluid text-center base-color-darkest" id="footer">
            © Copyright 2017 All Rights Reserved
        </div>
    </body>
</html>

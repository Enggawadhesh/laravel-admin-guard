<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- Blade page CSS --}}
    @stack('styles')

    {{-- Styles --}}
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    
</head>
	<body class="">
    <div id="app">

    	{{-- Begin page while admin not logged-in --}}
    	@guest
    		@yield('content')
		@else
		{{-- After admin login --}}
			<div id="wrapper">
			    {{-- Login Header --}}
			    @yield('content')
			</div>
		@endguest
		{{-- END wrapper --}}
	    
    </div>

{{-- Scripts --}}

    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>

    {{-- Blade page JS --}}
    @stack('scripts')
 
</body>
</html>
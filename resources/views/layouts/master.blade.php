<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BBPLK @yield('title') </title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ url('css/bootstrap-responsive.min.css') }}" />
		<link rel="stylesheet" href="{{ url('css/fullcalendar.css') }}" />	
		<link rel="stylesheet" href="{{ url('css/unicorn.main.css') }}" />
		<link rel="stylesheet" href="{{ url('css/unicorn.grey.css') }}" class="skin-color" />
		  <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		    <link href="/css/jquery.dataTables.css" rel="stylesheet">
    <link href="/css/dataTables.bootstrap.css" rel="stylesheet">
	</head>
	<body>
		
		
		@include('layouts.header')
            
		<div id="sidebar">
			@include('layouts.sidebar')
		
		</div>
		
		<div id="style-switcher">
			@include('layouts.options')
		</div>
		
		<div id="content">
			
			@yield('content')
			<div id="app">
			<div class="container-fluid">
			<div class="row-fluid">
			
			@include('layouts._flash')
			@yield('contents')
			</div>
			</div>
			</div>
			</div>
				
				<div class="row-fluid">
					@include('layouts.footer')
				</div>
			
		</div>
		

            <script src="{{ url('js/excanvas.min.js') }}"></script>
            <script src="{{ url('js/jquery.min.js') }}"></script>
            <script src="{{ url('js/jquery-ui.custom.js') }}"></script>
            <script src="{{ url('js/bootstrap.min.js') }}"></script>
            <script src="{{ url('js/jquery.flot.min.js') }}"></script>
            <script src="{{ url('js/jquery.flot.resize.min.js') }}"></script>
            <script src="{{ url('js/jquery.peity.min.js') }}"></script>
            <script src="{{ url('js/fullcalendar.min.js') }}"></script>
            <script src="{{ url('js/unicorn.js') }}"></script>
            <script src="{{ url('js/unicorn.dashboard.js') }}"></script>
                <script src="/js/app.js"></script>
                <script src="/js/jquery.dataTables.min.js"></script>
    			<script src="/js/dataTables.bootstrap.min.js"></script>
    			<script src="/js/custom.js"></script>
            @stack('js')
             @yield('scripts')
	</body>
</html>

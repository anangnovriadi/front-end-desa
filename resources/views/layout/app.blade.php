<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - Pemeritah Desa Cisaruah</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    @yield('add_css')
</head>
<body>
    @include('layout.header')
    
    @yield('content')

    @include('layout.footer')    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    @yield('add_js')
</body>
</html>
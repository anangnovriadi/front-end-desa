<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Portal Layanan Publik</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="{{ asset('css/main.css') }}" /> -->
    @yield('add_css')
</head>
<body onload="createCaptcha()">
    @include('layout.header')
    
    @yield('content')

    @include('layout.footer')    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://rawgithub.com/WickyNilliams/headroom.js/gh-pages/assets/scripts/main.js"></script>
    <script type="text/javascript">
        (function() {
        var header = new Headroom(document.querySelector("#header"), {
            tolerance: 5,
            offset : 205,
            classes: {
              initial: "animated",
              pinned: "slideDown",
              unpinned: "slideUp"
            }
        });
        header.init();

        var bttHeadroom = new Headroom(document.getElementById("btt"), {
            tolerance : 0,
            offset : 500,
            classes : {
                initial : "slide",
                pinned : "slide--reset",
                unpinned : "slide--down"
            }
        });
        bttHeadroom.init();
    }());
    </script>
    @yield('add_js')
</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta content="text/javascript" http-equiv="Content-Script-Type" />
    <meta content="text/css" http-equiv="Content-Style-Type" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="farm, products, harvest, Agriculture, best farm konnect, agro, trade, fruits, crops" />
    <meta name="description" content="Farmkonnect is a platform that connects farm products to customers in order to ease delivery of goods and maximize profits for the farmers" />  
    <link rel="shortcut icon" href="logo.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Farmkonnect') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">    

</head>
<body class="d-flex flex-column min-vh-100">
    <div id="app">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" async></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function(){
        
            $(document).on('click', '.open-overlay-search', function(){
                $('.search-overlay').css('display', 'block');
                let clone_search_form = $('#search').attr('class', 'navbar-nav').clone(true);
                $('.search-overlay-content').append(clone_search_form).fadeIn("fast");
                $('.search-overlay-content').find('.form-inline').attr('class', 'form-inline d-lg-none');
            });
            
            $(document).on('click', '.close-overlay-search', function(){
                $('.search-overlay-content').html('');
                $('.search-overlay').css('display', 'none');
        
            });        
        
        })
        
        $("[data-trigger]").on("click", function(){
            var trigger_id =  $(this).attr('data-trigger');
            $(trigger_id).toggleClass("show");
            $('body').toggleClass("offcanvas-active");
        });
        
        $(".btn-close").click(function(e){
            e.preventDefault();
            $(".navbar-collapse").removeClass("show");
            $("body").removeClass("offcanvas-active");
        }); 
        
        </script>
    </div>
</body>
</html>

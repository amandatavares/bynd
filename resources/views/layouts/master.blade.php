<html>
    <head>
        <title>RankedIn - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="description" content="No RankedIn você escolhe os melhores filmes e vê os melhores na opnião dos usuários!">
        <meta name="keywords" content="Rank,ranking,movie,filmes,classificação,rankedin">
        <meta name="author" content="Amanda Tavares">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">        
        <link rel="stylesheet" href="{{ asset('assets/css/custom.blade.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    </head>
    <body>
        @section('sidebar')
            
        @show

        <div class="container">
            @yield('content')
        </div>

        <!-- jQuery library -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
        <script type="text/javascript">
        $(function(){
            $('#rank').on('hidden.bs.modal', function () {
                window.location='';     
            })
        });
        </script>
    </body>
</html>

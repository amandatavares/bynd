<html>
    <head>
        <title>RankedIn - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">        
        <link rel="stylesheet" href="{{ asset('assets/css/custom.blade.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    </head>
    <body>
        @section('sidebar')
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">RankedIn</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Vote <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Filmes</a></li>        
                    <li><a href="#">Ranking</a></li>
                  </ul>                    
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>

        <!-- jQuery library -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
        <script type="text/javascript">
            showRanking();
        </script>
    </body>
</html>

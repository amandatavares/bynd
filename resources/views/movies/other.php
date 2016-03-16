@extends('layouts.master')

@section('title', 'Index')

@section('sidebar')
    @parent

    <p>------------Nav----------</p>
@endsection

@section('content')
    <p>This is my body content.</p>

    <div class="">
    @foreach ($movies as $movie)
      <p>This is movie {{ $movie->name }}</p>
      <a href="/vote/{{ $movie->id }}">Votar!</a>
    @endforeach

    <br>

    <!-- {{ HTML::image('/assets/img/iron-man.jpg', 'The iron man') }} -->

@endsection



<?php $cnt = 1; ?>
        @foreach ($movies as $d)
            @foreach ($movies as $movie)
            <div class="item <?= ($cnt==1) ? 'active' : '' ?>">
                <div class="row text-center">
                    <!-- ITEM-->
                    @if ($cnt%2 !=0 )
                    <div class="col-sm-5">
                        <div class="thumbnail-light"> <a href="#" class=""><img src="assets/{{$movie->file_path}}" class="poster"></a>
                            <div class="caption">
                                <h3 class="bold">{{ $movie->name }}</h3>

                                <p class="">{{ $movie->description }}</p>
                            </div>
                        </div>
                            
                    </div>
                    @else
                    <!-- ITEM-->
                    <div class="col-sm-2">
                        <div class="alias">
                            <span class="fa-stack fa-4x">
                              <i class="fa fa-circle-o fa-stack-2x"></i>
                              <i class="fa fa-close fa-stack-1x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- ITEM-->
                    <div class="col-sm-5">
                        <div class="thumbnail-dark"> <a href="#" class=""><img src="assets/{{$movie->file_path}}" class="poster"></a>
                            <div class="caption">
                                <h3 class="bold">{{ $movie->name }}</h3>

                                <p class="">{{ $movie->description }}</p>
                            </div>
                        </div>                            
                    </div> 
                    @endif
                </div>
            <!-- ITEM-->
            </div>
        <!-- carousel inner -->
        <!-- <a href="/vote/{{ $movie->id }}">Votar!</a>  -->   
        </div>
        <?php $cnt++; ?>
        @endforeach
        

        @endforeach
















        
       
        <?php $cnt1 = 1; ?>  
        <?php $cnt2 = 1; ?> 
            <div class="item <?= ($cnt1==1) ? 'active' : '' ?>">
                <div class="row text-center">
                            
            @foreach ($movies as $movie)
                @if ($cnt1%2 !=0 )
                <div class="col-sm-5">
                    <div class="thumbnail-light"> <a href="#" class=""><img src="assets/{{$movie->file_path}}" class="poster"></a>
                        <div class="caption">
                            <h3 class="bold">{{ $movie->name }} {{$cnt1}}</h3>

                            <p class="">{{ $movie->description }}</p>
                        </div>
                    </div>
                        
                </div>
                @endif 
                <?php $cnt1++; ?>
            @endforeach                                       
                <div class="col-sm-2">
                    <div class="alias">
                        <span class="fa-stack fa-4x">
                          <i class="fa fa-circle-o fa-stack-2x"></i>
                          <i class="fa fa-close fa-stack-1x"></i>
                        </span>
                    </div>
                </div>                                
            @foreach ($movies as $movie)
                @if ($cnt2%2 ==0 )
                    <div class="col-sm-5">
                        <div class="thumbnail-dark"> <a href="#" class=""><img src="assets/{{$movie->file_path}}" class="poster"></a>
                            <div class="caption">
                                <h3 class="bold">{{ $movie->name }} {{$cnt2}}</h3>

                                <p class="">{{ $movie->description }}</p>
                            </div>
                        </div>                            
                    </div> 
                @endif 
                <?php $cnt2++; ?>
            @endforeach
                </div>
            <!-- ITEM-->
            </div>
        <!-- carousel inner -->
        <!-- <a href="/vote/{{ $movie->id }}">Votar!</a>  -->  
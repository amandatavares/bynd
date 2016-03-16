@extends('layouts.master')

@section('title', 'Index')

@section('sidebar')
    @parent

    <p>------------Nav----------</p>
@endsection

@section('content')

    <div class="page-header">
         <h2 class="text-center bold">RankedIn: Vote no seu filme preferido! <button id="btn" class="btn btn-default">Passar</button></h2>
    </div>
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        	@for($j=0;$j<count($movies)/2;$j++)
           		 <li data-target="#myCarousel" data-slide-to="{{$j}}" class="<?= ($j==0) ? 'active' : '' ?>"></li>   
            @endfor         
        </ol>
        <!-- Carousel items -->        
        <div class="carousel-inner" role="movielist">
         	@for($i=0;$i<count($movies);$i=$i+2)
         		<div class="item <?= ($i==0) ? 'active' : '' ?>">
         			<div class="col-sm-5">
	                    <div class="thumbnail-light"><img src="assets/{{$movies[$i]->file_path}}" class="poster" onclick="vote({{$movies[$i]->id}})">
	                        <div class="caption">
	                            <h3 class="bold">{{ $movies[$i]->name }}</h3>

	                            <p class="">{{ $movies[$i]->description }}</p>
	                        </div>
	                    </div>	                       
               		 </div>
               		 <div class="col-sm-2">
	                    <div class="alias">
	                        <span class="fa-stack fa-4x">
	                          <i class="fa fa-circle-o fa-stack-2x"></i>
	                          <i class="fa fa-close fa-stack-1x"></i>
	                        </span>
	                    </div>
	                </div>
               		 <div class="col-sm-5">
	                    <div class="thumbnail-dark"><img src="assets/{{$movies[$i+1]->file_path}}" class="poster" onclick="vote({{$movies[$i+1]->id}})">
	                        <div class="caption">
	                            <h3 class="bold">{{ $movies[$i+1]->name }}</h3>

	                            <p class="">{{ $movies[$i+1]->description }}</p>
	                        </div>
	                    </div>	                       
               		 </div>

         			<!-- {{$movies[$i]->name}} - {{$movies[$i+1]->name}}  -->
         		</div>
         	@endfor
        </div>        
 
    </div>


@endsection

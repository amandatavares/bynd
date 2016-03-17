@extends('layouts.master')

@section('title', 'Index')

@section('sidebar')
    @parent    
@endsection

@section('content')

    <div class="page-header">
         <h2 class="text-center bold">RankedIn: Vote no seu filme preferido!</h2>
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
	                    <div class="thumbnail thumbnail-light">
                            <img src="assets/{{$movies[$i]->file_path}}" onclick="vote({{$movies[$i]->id}})">
	                        <div class="caption">
	                            <h3 class="bold text-center">{{ $movies[$i]->name }}</h3>

	                            <p class="text-justify">{{ $movies[$i]->description }}</p>
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
                        
	                    <div class="thumbnail thumbnail-light"><img src="assets/{{$movies[$i+1]->file_path}}" onclick="vote({{$movies[$i+1]->id}}) ">
	                        <div class="caption">
	                            <h3 class="bold text-center">{{ $movies[$i+1]->name }}</h3>

	                            <p class="text-justify">{{ $movies[$i+1]->description }}</p>
	                        </div>
	                    </div>	                       
               		 </div>

         			<!-- {{$movies[$i]->name}} - {{$movies[$i+1]->name}}  -->
         		</div>
         	@endfor
        </div>         
    </div>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#rank">Open Modal</button>

<!-- Modal -->
<div id="rank" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">RankedIn Melhores Filmes</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    

@endsection

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
                            <img class="vote" src="assets/{{$movies[$i]->file_path}}" onclick="vote({{$movies[$i]->id}})<?=($i+2==count($movies)) ? ', showRanking()' : ''?> ">
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
                        
	                    <div class="thumbnail thumbnail-light"><img src="assets/{{$movies[$i+1]->file_path}}" onclick="vote({{$movies[$i+1]->id}})<?=($i+2==count($movies)) ? ', showRanking()' : ''?> ">
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

<!-- Modal Rank-->
<div id="rank" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title bold"><i class="fa fa-star"></i>&nbsp; Melhores Filmes</h3>
        <p>Rank dos melhores filmes segundo os espectadores.</p>  
      </div>
      <div class="modal-body">
        <!-- content carregado via post da pagina rank.blade.php, atualizado via ajax. script em custom.js -->
      </div>
    </div>
  </div>
</div>    

<!-- Modal Welcome-->
<div id="welcome" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title bold">RankedIn - Escolha os melhores filmes!</h2>
      </div>
      <div class="modal-body">
        <img src="/assets/img/star.png" class="star">        
          <h4>O melhor do cinema está aqui! No RankedIn você seleciona os filmes que você mais gosta, tendo de escolher 10 filmes da lista dada. Basta clicar na imagem e seu voto será contabilizado!</h4>
          <h4>No final, veja o Rank do melhores filmes na opnião dos espectadores. Está pronto? Comece a votar nos seus filmes preferidos!</h4>
      </div>
    </div>
  </div>
</div>

@endsection


<!-- acessando n -->
@foreach ($votes as $vote)
<div class="row">
  <div class="col-sm-4">
  	<img src="assets/{{$vote->movie()->first()->file_path}}" class="rank-poster">
  </div>
  <div class="col-sm-4">
  	<!-- movie é um array. o first acessa o primeiro elemento do array movie. so entao posso acessar o nome, elemnto contido em movie -->
  	<h4 class="bold">{{ $vote->movie()->first()->name }}</h4>
  </div>
  <div class="col-sm-4">
  	<h4 class="bold">{{ $vote->n_votes }}</h4>
  </div>
</div>
@endforeach
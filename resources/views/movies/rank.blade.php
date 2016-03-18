<div class="container-fluid">          
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Título</th>
        <th>Votos</th>
      </tr>
    </thead>
    <tbody>
<!-- para ditar a posição no rank -->
<?php $rank=1;?> 
<!-- Pode usar para cada voto porque está relacionado com filmes -->
@foreach ($votes as $vote) 
      <!-- movie() tende a retorna um array. Pego o primeiro elemento deste (nesse caso, o unico) e acesso o desejado (path, name...) -->
      <tr>
        <td><span class="bold">#{{$rank}}</span></td>
        <td>
          <img src="assets/{{$vote->movie()->first()->file_path}}" class="rank-poster">
          <h4 class="bold">{{ $vote->movie()->first()->name }}</h4>
        </td>
        <td><h4 class="bold">{{ $vote->n_votes }}</h4></td>
      </tr>
  <?php $rank++;?>
@endforeach     
    </tbody>
  </table>
</div>

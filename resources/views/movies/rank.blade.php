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
<!-- acessando n -->
<?php $rank=1;?>
@foreach ($votes as $vote)
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

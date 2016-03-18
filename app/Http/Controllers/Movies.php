<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\Vote;
use App\Http\Requests;
use Illuminate\Routing\Redirector;

class Movies extends Controller
{
    //
    function index(){
      // Liste todos os filmes e os retorne no Index
      $movie = Movie::all();
      return view('movies/index',['movies'=>$movie]);
    }
    function vote($id){
      // Where tende a retornar array. O first serve para pegar a primeira ocorrência, independente de quantos existam
      if ($vote = Vote::where("movies_id","=",$id)->first()) {
        // se o voto existir, soma mais um a ele
        $n = $vote->n_votes+1;
        $vote->n_votes = $n;
      } else {
        // se não houver nenhum voto, crie um
        $vote = new Vote();
        $vote->movies_id = $id;
        $vote->n_votes = 1;
      }
      $vote->save(); //salva os votos feitos no banco
      return redirect('/movies');
      //return Redirect::to('/movies');//redirect()->route('/movies');
    }
    // função para mostrar os votos no Rank. 
    // Trás os votos em ordem decrescente, ou seja, pega os filmes com mais votos e os mostra primeiro. 
    // se existirem qnt de votos iguais, vem primeiro o que foi votado primeiro
    function show_votes(){
      $votes = Vote::orderBy('n_votes','desc')->get();
      return view('movies/rank',['votes'=>$votes]);
    }
}

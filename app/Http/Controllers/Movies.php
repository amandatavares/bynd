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
      // liste todos os filmes.
      // $movie = Movie::orderBy('id','desc')->get()
      $movie = Movie::all();
      return view('movies/index',['movies'=>$movie]);
    }
    function vote($id){
      // Where tende a retornar array. O first serve para pegar a primeira ocorrência, independente de quantos existam
      if ($vote = Vote::where("movies_id","=",$id)->first()) {

        $n = $vote->n_votes+1;
        $vote->n_votes = $n;
      } else {
        $vote = new Vote();
        $vote->movies_id = $id;
        $vote->n_votes = 1;
      }
      $vote->save();
      return redirect('/movies');
      //return Redirect::to('/movies');//redirect()->route('/movies');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Vote extends Model
{
  //Relacionamento com filmes. O voto pertence ao filme.
  public function movie() {
  	// retorna uma lista de dados relacionados; funciona como o where id do DB
    return $this->belongsTo('App\Movie','movies_id'); //tabela,chave estrangeira da segunda tabela
  }
}

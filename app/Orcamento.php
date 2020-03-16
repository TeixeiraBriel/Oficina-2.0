<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = ['cliente','dataOrcamento','descricao','valor', 'vendedor'];
    public $timestamps = false;
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	use SoftDeletes;

    protected $fillable = ["nome","email","senha","cpf","rg","dt_nasc"];

    protected $hidden = ["senha"];

    protected $dates = ['deleted_at'];

}

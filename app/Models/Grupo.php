<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table ='grupos';
    public function grupos()
    {
        return $this->HasMany(Cuatrimestre::class);
    }
}

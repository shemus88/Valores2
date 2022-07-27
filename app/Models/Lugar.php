<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lugar extends Model
{
    use HasFactory;
    protected $table ='lugares';
    protected $fillable=[
        'id',
        'nombre',
        'capacidad',
        'foto',
        'status',
    ];
    public function lugar()
    {
        return $this->HasMany(Lugar::class);
    } 
}


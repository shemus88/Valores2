<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conferencista extends Model
{
    use HasFactory;
    protected $table ='conferencistas';
    public function conferencias()
    {
        return $this->HasMany(Conferencias::class);
    }
}

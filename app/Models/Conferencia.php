<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conferencia extends Model
{
    use HasFactory;
    protected $table ='conferencias';
    public function conferencia()
    {
        return $this->HasMany(Conferencia::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $guarded = [];
    //protected $fillable = ['name', 'description', 'category']; this helps us to make a masive migration but only with specific fields 
    //protected $table = "users"; //Esto hace que este modelo administre la tabla cursos
}

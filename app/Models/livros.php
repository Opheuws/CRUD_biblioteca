<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livros extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_livro',
        'num_pages',
         'estoque',
      ];
}

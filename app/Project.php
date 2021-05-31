<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    #protected $fillable = [ 'title', 'description' ];
    // si la tabla no es encontrada, la podemos definir con protected $table = 'my_table';
    
}

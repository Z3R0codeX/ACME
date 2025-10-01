<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blueprint extends Model
{
    protected $fillable = ['name', 'description', 'version'];

    protected $table = 'blueprint'; 

}

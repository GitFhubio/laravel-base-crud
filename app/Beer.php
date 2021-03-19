<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable=['brand','materials','fermentation','colour','strength','price','cover'];  
}

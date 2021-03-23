<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
class Beer extends Model
{
    protected $fillable=['brand','materials','fermentation','colour','strength','price','cover'];
    public function getCreatedAtAttribute($value)
    {
      $date=new Carbon($value);
        $date= $date->format('d F Y');
        return $date;
    }
}


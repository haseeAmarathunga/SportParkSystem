<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = [ 'nic','type','pfm','date','fee'];
  
}

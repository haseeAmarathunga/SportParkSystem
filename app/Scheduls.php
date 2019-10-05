<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheduls extends Model
{
  protected $fillable = [ 'type','group','day','time','nic'];
}

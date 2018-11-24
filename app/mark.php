<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    protected $fillable = [ 'nic','type','group','time','date'];
}

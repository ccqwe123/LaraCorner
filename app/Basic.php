<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    protected $table = 'basic';
    protected $fillable = ['name', 'address','status'];
}

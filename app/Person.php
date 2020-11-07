<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
   // protected $guarded = [];
   protected $fillable = [
       
    'first_name',
    'last_name',
    'email',
    'phone',
    'country',

   ];
}

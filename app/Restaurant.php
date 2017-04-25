<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable=['name','description','streetaddress','city','state','website'];
}

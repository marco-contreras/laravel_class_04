<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'last_name', 'nickname', 'relationship', 'cellphone', 'email'];
}
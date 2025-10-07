<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone_number', 'college_address_id', 'comment'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name can be renamd here
    protected $table ="posts";
    // Primary key can be renamed here
    public $primaryKey = "id";
    //timestamps can be disabled by returning false
    public $timestamps = true;
}

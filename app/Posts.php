<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable=[
    	"img_link",
    	"category",
    	"title",
    	"short_description",
    	"description"
    ];
}

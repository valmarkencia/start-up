<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    protected $dates = ['date_finished'];

    protected $fillable = [
    	'title',
    	'description',
    	'slug',
    	'priority',
    	'due_date',
    ];
}

<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	'title',
    	'description',
    	'priority',
    	'due_date',
    ];

    protected $dates = ['due_date'];

    public function setDueDateAttributes($date)
    {
    	$this->attributes['due_date'] = Carbon::parse($date);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $dates = ['date_finished'];

    protected $fillable = [
    	'company_name',
    	'client_name',
    	'slug',
    	'status',
    	'date_finished',
    ];

    public function setDueDateAttributes($date)
    {
    	$this->attributes['date_finished'] = Carbon::parse($date);
    }
}

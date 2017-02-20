<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $fillable = [
    	'amount',
    	'comment',
    ];

    public function user(){
    	$this->belongsTo('App\User');
    }
}

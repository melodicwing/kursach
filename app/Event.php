<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
	use SoftDeletes;

	protected $fillable = [ 'contact', 'bill', 'total' ];
	protected $dates = ['deleted_at'];
	protected $casts = [ 'bill' => 'array' ];
}

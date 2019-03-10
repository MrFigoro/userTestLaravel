<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Post
 *
 * @mixin \Eloquent
 */

class Event extends Model
{
	protected $fillable = ['img', 'title', 'date', 'cost'];
}

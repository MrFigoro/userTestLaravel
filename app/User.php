<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Post
 *
 * @mixin \Eloquent
 */

class User extends Model
{
    protected $fillable = ['firstName', 'secondName', 'age'];
}

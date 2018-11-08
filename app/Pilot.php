<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    protected $fillable = [
        'name','email','mobile','linkedin','facebook','university','about','slug'
    ];
}

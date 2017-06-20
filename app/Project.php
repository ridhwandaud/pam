<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_name','project_type','project_pic','project_location'];

	protected $dates = [
        'created_at',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task_name','task_type','task_deadline','task_priority'];

	protected $dates = [
        'created_at',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}

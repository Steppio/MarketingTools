<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
	
	protected $guarded = array();

    public function checklist()
    {
        return $this->hasOne('Checklist');
    }

}
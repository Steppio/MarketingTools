<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{

	protected $guarded = array();

    public function site()
    {
        return $this->belongsTo('App\Site');
    }

}

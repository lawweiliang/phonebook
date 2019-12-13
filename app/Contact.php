<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    public function contactCategory()
    {
        return $this->belongsTo('App\ContactCategory');
    }
}

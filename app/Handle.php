<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handle extends Model
{
    //
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'handles';

    public function user(){

       return $this->belongsTo(App\User::class);
	}
}

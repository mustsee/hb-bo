<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $primaryKey = 'id';

    protected $fillable = [
        'day',
        'habits',
        'done_habits',
        'good_day'
    ];

    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentHabit extends Model
{
    protected $table = 'current_habits';

    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}

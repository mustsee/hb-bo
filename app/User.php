<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public $timestamps = true;

    public function events() {
        return $this->hasMany('App\Event');
    }

    public function current_habits() {
        return $this->hasMany('App\CurrentHabit');
    }
}

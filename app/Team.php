<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function player(){

        return $this->hasMany(Player::class);
    }

    public function comment(){

        return $this->hasMany(Comment::class);
    }
}

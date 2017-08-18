<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function getRouteKeyName(){
        return 'name';
    }

    public function player(){

        return $this->hasMany(Player::class);
    }

    public function comment(){

        return $this->hasMany(Comment::class);
    }

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_teams');
    }
}

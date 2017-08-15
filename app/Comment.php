<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [ 'content', 'user_id', 'team_id', 'created_at', 'updated_at' ];

    public function team(){

        return $this->belongsTo(Team::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}

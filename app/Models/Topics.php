<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    protected $table = 'topics';

    public function belongsToCategorys()
    {
        return $this->belongsTo('App\Models\Categorys', 'categorys_id', 'id');
    }

    public function belongsToUser()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    public function belongsToCommentsUser()
    {
        return $this->belongsTo('App\Models\User', 'last_comment_users_id', 'id');
    }
}

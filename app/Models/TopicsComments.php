<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopicsComments extends Model
{
    public function __construct($topics_id)
    {
        $this->setTable('comments_'.($topics_id%8));
    }

    public function belongsToUser()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    public function belongsToQuoteUser()
    {
        return $this->belongsTo('App\Models\User', 'quote_users_id', 'id');
    }
}

<?php

namespace App\Http\Controllers\Www;

use App\Http\Requests\CommentsAdd;
use App\Models\TopicsDynamics;

class CommentsController extends BaseController
{
    public $pageType = 'commentsAdd';

    public function add(CommentsAdd $request)
    {
        return $this->outJson(0, 'ok');
    }
}

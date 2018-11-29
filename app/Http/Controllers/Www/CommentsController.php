<?php

namespace App\Http\Controllers\Www;

use App\Http\Requests\CommentsAdd;
use App\Models\TopicsComments;
use App\Models\TopicsDynamics;
use GrahamCampbell\Markdown\Facades\Markdown;

class CommentsController extends BaseController
{
    public $pageType = 'commentsAdd';

    public function add(CommentsAdd $request)
    {

        $topicsComments = new TopicsComments($request->topics_id);
        $lastCommentsInfo = $topicsComments->where('topics_id', $request->topics_id)->orderBy('id', 'desc')->first();
        $floor = 1;
        if($lastCommentsInfo)
        {
            $floor = $lastCommentsInfo->floor + 1;
        }

        $data = [
            'topics_id'=>$request->topics_id,
            'users_id'=>11,
            'quote_comments_id'=>$request->quote_comments_id,
            'quote_users_id'=>$request->quote_users_id,
            'content'=>Markdown::convertToHtml($request->comment_content),
            'floor'=>$floor,
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        if($topicsComments->insert($data))
        {
            return $this->outJson(0, '评论成功');
        }

        return $this->outJson(1, '评论失败');
    }
}

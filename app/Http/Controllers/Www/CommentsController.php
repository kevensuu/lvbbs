<?php

namespace App\Http\Controllers\Www;

use App\Http\Requests\CommentsAdd;
use App\Models\TopicsComments;
use App\Models\TopicsDynamics;
use App\Models\User;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Http\Request;

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

        $content = Markdown::convertToHtml($request->comment_content);
        $content = preg_replace('/<h1>(.*?)<\/h1>/', '<h2>${1}</h2>', $content);

        $users_id = 11; // @todo

        $data = [
            'topics_id'=>$request->topics_id,
            'users_id'=>$users_id,
            'quote_comments_id'=>$request->quote_comments_id,
            'quote_users_id'=>$request->quote_users_id,
            'content'=>$content,
            'floor'=>$floor,
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        if($topicsComments->insert($data))
        {
            return $this->outJson(0, '评论成功', ['content'=>$this->formatComment($content)]);
        }

        return $this->outJson(1, '评论失败');
    }

    public function preview(Request $request)
    {
        if(!$request->comment_content)
        {
            return $this->outJson(1);
        }

        $content = Markdown::convertToHtml($request->comment_content);
        $content = preg_replace('/<h1>(.*?)<\/h1>/', '<h2>${1}</h2>', $content);

        return $this->outJson(0, '', ['content'=>$this->formatComment($content)]);
    }

    protected function formatComment($content)
    {
        $usersId = 11;  // @todo
        $usersInfo = User::find($usersId);
        $name = $usersInfo->nickname ? $usersInfo->nickname : $usersInfo->name;

        $comment = '<div id="previewContent" class="reply"><div><div class="avatar"><a href="#"><img class="media-object avatar-48" src="'.$usersInfo->face.'"></a></div><div class="infos"><div class="info"><span class="name"><a class="user-name" href="#">'.$name.'</a></span> <a class="time" href="#"><abbr class="timeago">'.date('Y-m-d').'</abbr></a></span></div><div class="markdown"><h2>'.$content.'</h2></div></div></div></div>';

        return $comment;
    }
}

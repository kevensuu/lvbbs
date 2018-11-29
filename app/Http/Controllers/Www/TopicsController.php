<?php

namespace App\Http\Controllers\Www;

use App\Models\Categorys;
use App\Models\Topics;
use App\Models\TopicsComments;
use App\Models\TopicsDynamics;

class TopicsController extends BaseController
{
    public $pageSize = 25;

    public $commentPageSize = 30;

    public function newest($page=1)
    {
        $this->pageType = 'newest';

        $where = [
            ['is_delete', '=', 0],
        ];
        $data['topicsList'] = Topics::where($where)
            ->orderBy('id', 'desc')
            ->offset(($page-1)*$this->pageSize)
            ->limit($this->pageSize)
            ->get();
        $data['fpage'] = $this->fpage('topics.newest.page', [], $page, Topics::where($where)->count(), $this->pageSize);
        $data['allNodes'] = Categorys::allNodes();

        return $this->display('www.topics.list', $data);
    }

    public function recommend($page=1)
    {
        $this->pageType = 'recommend';

        $where = [
            ['is_delete', '=', 0],
            ['is_recommend', '=', 1],
        ];
        $data['topicsList'] = Topics::where($where)
            ->orderBy('id', 'desc')
            ->offset(($page-1)*$this->pageSize)
            ->limit($this->pageSize)
            ->get();
        $data['fpage'] = $this->fpage('topics.newest.page', [], $page, Topics::where($where)->count(), $this->pageSize);
        $data['allNodes'] = Categorys::allNodes();

        return $this->display('www.topics.list', $data);
    }

    public function excellent($page=1)
    {
        $this->pageType = 'excellent';

        $where = [
            ['is_delete', '=', 0],
        ];
        $data['topicsList'] = Topics::where($where)
            ->orderBy('views', 'desc')
            ->offset(($page-1)*$this->pageSize)
            ->limit($this->pageSize)
            ->get();
        $data['fpage'] = $this->fpage('topics.newest.page', [], $page, Topics::where($where)->count(), $this->pageSize);
        $data['allNodes'] = Categorys::allNodes();

        return $this->display('www.topics.list', $data);
    }

    public function noReply($page=1)
    {
        $this->pageType = 'noReply';

        $where = [
            ['is_delete', '=', 0],
            ['comments', '=', 0],
        ];
        $data['topicsList'] = Topics::where('is_delete', 0)->where($where)
            ->orderBy('id', 'desc')
            ->offset(($page-1)*$this->pageSize)
            ->limit($this->pageSize)
            ->get();
        $data['fpage'] = $this->fpage('topics.newest.page', [], $page, Topics::where($where)->count(), $this->pageSize);
        $data['allNodes'] = Categorys::allNodes();

        return $this->display('www.topics.list', $data);
    }

    public function lastReply($page=1)
    {
        $this->pageType = 'lastReply';

        $where = [
            ['is_delete', '=', 0],
        ];
        $data['topicsList'] = Topics::where($where)
            ->orderBy('last_comment_at', 'desc')
            ->offset(($page-1)*$this->pageSize)
            ->limit($this->pageSize)
            ->get();
        $data['fpage'] = $this->fpage('topics.newest.page', [], $page, Topics::where($where)->count(), $this->pageSize);
        $data['allNodes'] = Categorys::allNodes();

        return $this->display('www.topics.list', $data);
    }

    public function nodes($id, $page=1)
    {
        $this->pageType = 'nodes';

        $id = (int)$id;
        if(!$id) abort(404);

        $nodeInfo = Categorys::find($id);
        if(!$nodeInfo) abort(404);

        $data['nodeInfo'] = $nodeInfo;
        $data['topicsNum'] = Topics::where('categorys_id', $nodeInfo->id)->where('is_delete', 0)->count();
        $data['topicsList'] = Topics::where('is_delete', 0)
            ->where('categorys_id', $id)
            ->orderBy('id', 'desc')
            ->offset(($page-1)*$this->pageSize)
            ->limit($this->pageSize)
            ->get();
        $data['fpage'] = $this->fpage('topics.nodes.page', ['id'=>$id], $page, Topics::where('is_delete', 0)->where('categorys_id', $id)->count(), $this->pageSize);
        return $this->display('www.topics.list', $data);
    }

    public function detail($id, $page=1)
    {
        $this->pageType = 'topicDetail';

        $id = (int)$id;
        if(!$id) abort(404);

        $data['detail'] = Topics::where('is_delete', 0)->find($id);
        if(!$data['detail']) abort(404);

        $topicsComments = new TopicsComments($id);
        $where = [
            ['topics_id', '=', $id],
        ];
        $data['commentsList'] = $topicsComments->where($where)
            ->orderBy('id', 'asc')
            ->offset(($page-1)*$this->commentPageSize)
            ->limit($this->commentPageSize)
            ->get();
        $data['commentsTotal'] = $topicsComments->where($where)->count();
        $data['fpage'] = $this->fpage('topics.detail.page', ['id'=>$id], $page, $data['commentsTotal'], $this->commentPageSize);

        return $this->display('www.topics.detail', $data);
    }
}

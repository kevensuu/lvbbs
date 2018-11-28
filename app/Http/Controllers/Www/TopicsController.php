<?php

namespace App\Http\Controllers\Www;

use App\Models\Categorys;
use App\Models\Topics;
use App\Models\TopicsDynamics;

class TopicsController extends BaseController
{
    public function newest($page=1)
    {
        $this->pageType = 'newest';
        $pageSize = 25;
        $data['topicsList'] = Topics::where('is_delete', 0)
            ->orderBy('id', 'desc')
            ->offset(($page-1)*$pageSize)
            ->limit($pageSize)
            ->get();
        $data['fpage'] = $this->fpage('topics.newest.page', [], $page, Topics::where('is_delete', 0)->count(), $pageSize);
        return $this->display('www.topics.list', $data);
    }
}

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
        $data['topicsList'] = Topics::where('is_delete', 0)->orderBy('id', 'desc')->paginate(5);
        $data['page'] = $page;
        return $this->display('www.topics.list', $data);
    }
}

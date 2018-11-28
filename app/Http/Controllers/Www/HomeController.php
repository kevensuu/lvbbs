<?php

namespace App\Http\Controllers\Www;

use App\Models\Categorys;
use App\Models\Topics;
use App\Models\TopicsDynamics;

class HomeController extends BaseController
{
    public $pageType = 'home';

    public function show()
    {
        $lastTime = date('Y-m-d H:i:s', strtotime('-30 days'));
        $data['topicsList_l'] = Topics::where('created_at','>', $lastTime)
            ->where('is_delete', 0)
            ->orderBy('views', 'desc')
            ->limit(10)
            ->get();

        $data['topicsList_r'] = Topics::where('created_at','>', $lastTime)
            ->where('is_delete', 0)
            ->orderBy('views', 'desc')
            ->offset(10)
            ->limit(10)
            ->get();

        $data['allNodes'] = Categorys::allNodes();

        return $this->display('www.home', $data);
    }
}

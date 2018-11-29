<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $pageType = 'home';

    public function display($pathName, array $data=array())
    {
        $data['pageType'] = $this->pageType;

        return view($pathName, $data);
    }

    public function outJson($code=0, $msg='', array $data=[])
    {
        return response()->json([
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data,
        ]);
    }
}

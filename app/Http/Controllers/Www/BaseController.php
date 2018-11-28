<?php

namespace App\Http\Controllers\Www;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function fpage($routeNmae, $routeDate, &$cpage, $totalNums, $pnum = 20)
    {
        if($totalNums == 0)
        {
            return '';
        }
        $total_page = ceil($totalNums / $pnum);
        if ($cpage < 1)
        {
            $cpage = 1;
        }
        elseif ($cpage > $total_page)
        {
            $cpage = $total_page;
        }
        $page = '<ul class="pagination">';

        // 首页
        if(false && $cpage > 1)
        {
            $routeDate['page'] = 1;
            $page .= "<li class='page-item'><a class='page-link' href='".route($routeNmae, $routeDate)."'>首页</a></li>";
        }

        if($cpage > 1)
        {
            $routeDate['page'] = $cpage - 1;
            $page .= '<li class="page-item prev"><a rel="prev" class="page-link" href="'.route($routeNmae, $routeDate).'"><i class="fa fa-angle-left"></i> 上一页</a></li>';
        }

        // 输出前N页
        $pageStyleNum = 3;
        $start_page = $cpage - $pageStyleNum;
        $start_page = ($start_page <= 1) ? 1 : $start_page;
        for ($i = $start_page; $i < $cpage; $i ++)
        {
            $routeDate['page'] = $i;
            $page .= "<li class='page-item'><a class='page-link' href='".route($routeNmae, $routeDate)."'>{$i}</a></li>";
        }
        // 输出后N页
        $end_page = $cpage + $pageStyleNum;
        $end_page = ($end_page >= $total_page) ? $total_page : $end_page;
        for ($i = $cpage; $i <= $end_page; $i ++)
        {
            if ($i == $cpage)
            {
                $routeDate['page'] = $i;
                $page .= "<li class=\"page-item active\"><a class='page-link' href='javascript:void(0);'>{$i}</a></li>";
            }
            else
            {
                $routeDate['page'] = $i;
                $page .= "<li class='page-item'><a class='page-link' href='".route($routeNmae, $routeDate)."'>{$i}</a></li>";
            }
        }

        if($cpage < $total_page)
        {
            $routeDate['page'] = $cpage+1;
            $page .= '<li class="page-item next"><a rel="next" class="page-link" href="'.route($routeNmae, $routeDate).'">下一页 <i class="fa fa-angle-right"></i></a></li>';
        }

        // 最后一页
        if(false && $cpage < $total_page)
        {
            $routeDate['page'] = $total_page;
            $page .= "<li class='page-item'><a class='page-link' href='".route($routeNmae, $routeDate)."'>尾页</a></li>";
        }


        $page .= '</ul>';
        return $page;
    }
}

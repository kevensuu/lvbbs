<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    public static function allNodes()
    {
        $allNodes = Categorys::selectRaw("id,title,pid,concat(path,'-',id) as fullpath")
            ->orderBy('fullpath', 'asc')
            ->get()->toArray();
        if(!$allNodes) return [];

        $tmp = [];
        foreach ($allNodes as $value)
        {
            if(!$value['pid'])
            {
                $value['sonNodes'] = [];
                $tmp[$value['id']] = $value;
                continue;
            }

            $tmp[$value['pid']]['sonNodes'][] = $value;
        }

        return $tmp;
    }
}

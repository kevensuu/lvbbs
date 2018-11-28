<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=5;$i++)
        {
            $id = DB::table('categorys')->insertGetId([
                'pid' => 0,
                'title' => '分类'.$i,
                'summary' => 'summary-'.$i,
                'path'=>"0",
            ]);

            $num = mt_rand(5,15);
            for ($j=1;$j<=$num;$j++)
            {
                DB::table('categorys')->insert([
                    'pid' => $id,
                    'title' => "分类-{$i}-{$j}",
                    'summary' => "分类summary-{$i}-{$j}",
                    'path'=>"0-{$id}",
                ]);
            }
        }
    }
}

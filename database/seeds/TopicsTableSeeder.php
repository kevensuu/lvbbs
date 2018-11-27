<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=100;$i++)
        {
            $categorys_ids = [2,3,5,6,8,9,11,12,14,15];
            $id = DB::table('topics')->insertGetId([
                'categorys_id' =>$categorys_ids[array_rand($categorys_ids)],
                'users_id' => mt_rand(1, 20),
                'last_comment_users_id' => mt_rand(1, 20),
                'title' => '标题'.str_random(20),
                'views' =>mt_rand(0, 1000),
                'likes' =>mt_rand(0, 1000),
                'comments' =>mt_rand(0, 1000),
                'favorites' =>mt_rand(0, 1000),
                'created_at' =>date('Y-m-d H:i:s'),
                'last_comment_at' =>date('Y-m-d H:i:s'),
            ]);

            DB::table('topics_details')->insert([
                'topics_id' =>$id,
                'topics_content' => '内容'.str_random(20),
            ]);
        }
    }
}

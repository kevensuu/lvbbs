<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics_id = 100;
        $table = 'comments_'.($topics_id%8);

        for($i=1;$i<=20;$i++)
        {
            $users_id = mt_rand(1, 20);
            DB::table($table)->insertGetId([
                'topics_id' => $topics_id,
                'users_id' => $users_id,
                'quote_comments_id'=>0,
                'floor'=>$i,
                'content'=>'回复内容'.str_random(20),
                'created_at'=>date('Y-m-d H:i:s'),
            ]);
        }

        $data = [
            'last_comment_users_id'=>$users_id,
            'last_comment_at'=>date('Y-m-d H:i:s'),
        ];
        DB::table('topics')->where('id', $topics_id)->update($data);
    }
}

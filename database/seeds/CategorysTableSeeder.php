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
            DB::table('categorys')->insert([
                'pid' => 0,
                'title' => '分类'.$i,
            ]);

            for ($j=1;$j<=2;$j++)
            {
                DB::table('categorys')->insert([
                    'pid' => $i,
                    'title' => "分类-{$i}-{$j}",
                ]);
            }
        }
    }
}

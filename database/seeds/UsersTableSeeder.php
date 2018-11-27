<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<20;$i++)
        {
            $data = [
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
            ];
            $data['face'] = config('app.static_url').'/default-avatar/'.strtoupper(substr($data['name'], 0, 1)).'.png';
            DB::table('users')->insert($data);
        }
    }
}

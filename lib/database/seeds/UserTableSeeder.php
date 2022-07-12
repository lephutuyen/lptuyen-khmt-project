<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
              'email'=>'admin@gmail.com',
                'name'=>'Admin',
                'password'=>bcrypt('123456')
            ],
        ];
        DB::table('vp_users') -> insert($data);

    }
}

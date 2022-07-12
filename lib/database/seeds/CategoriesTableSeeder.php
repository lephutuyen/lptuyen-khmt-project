<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'cate_name' => 'Sách',
                'cate_slug'=>str_slug('Sách')
            ]
        ];
        DB::table('vp_categories')->insert($data);
    }
}

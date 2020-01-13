<?php

use Illuminate\Database\Seeder;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'pet_id' => '1',
            'date' => '2020-01-01',
            'feeding' => '1',
            'excreta' => '0',
            'water' => '0',
            'memo' => '特になし'
        ];
        DB::table('diaries')->insert($param);
        
        $param = [
            'user_id' => '1',
            'pet_id' => '3',
            'date' => '2020-01-02',
            'feeding' => '1',
            'excreta' => '1',
            'water' => '0',
            'memo' => '特になし'
        ];
        DB::table('diaries')->insert($param);
        
        $param = [
            'user_id' => '2',
            'pet_id' => '2',
            'date' => '2020-01-02',
            'feeding' => '1',
            'excreta' => '1',
            'water' => '0',
            'memo' => '特になし'
        ];
        DB::table('diaries')->insert($param);

        $param = [
            'user_id' => '2',
            'pet_id' => '3',
            'date' => '2020-01-02',
            'feeding' => '1',
            'excreta' => '1',
            'water' => '0',
            'memo' => '特になし'
        ];
        DB::table('diaries')->insert($param);
    }
}

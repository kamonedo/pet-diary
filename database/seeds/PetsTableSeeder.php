<?php

use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
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
            'type' => 'ヒョウモントカゲモドキ',
            'name' => 'ぺにたん'
        ];
        DB::table('pets')->insert($param);
        
        $param = [
            'user_id' => '1',
            'type' => 'ヒョウモントカゲモドキ',
            'name' => 'ソルト'
        ];
        DB::table('pets')->insert($param);
        
        $param = [
            'user_id' => '2',
            'type' => 'フトアゴヒゲトカゲ',
            'name' => 'アルゴン'
        ];
        DB::table('pets')->insert($param);
        
        $param = [
            'user_id' => '1',
            'type' => 'アンボンアオジタトカゲ',
            'name' => 'しゃもじ'
        ];
        DB::table('pets')->insert($param);
        
    }
}

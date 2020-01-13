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
        App\User::create([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => Hash::make('root'), // この場合、「root」でログインできる
            'remember_token' => str_random(10),
        ]);
        
        App\User::create([
            'name' => 'kamonedo',
            'email' => 'kamonedo@gmail.com',
            'password' => Hash::make('jyun1225'), // この場合、「root」でログインできる
            'remember_token' => str_random(10),
        ]);
    }
}

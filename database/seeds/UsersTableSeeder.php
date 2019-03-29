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
        //
        factory('App\User',5)->create();
        DB::table('users')->insert([
            'role_id'=>1,
            'is_active'=>1,
            'name'=>'martijn',
            'email'=>'tetaertm@hotmail.com',
            'password'=>bcrypt(123456),
            'remember_token'=>str_random(10)
        ]);
    }
}

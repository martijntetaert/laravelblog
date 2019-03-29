<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate = ['posts','categories','users','roles'];
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->toTruncate as $table){
            DB::table('posts')->truncate();
            DB::table('categories')->truncate();
            DB::table('users')->truncate();
            DB::table('roles')->truncate();
        }
        $this->call(UsersTableSeeder::class);
        $this->call(PostTableSeeder::class);

        $this->call(RolesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}

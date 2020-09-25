<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
            DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);


        DB::table('roles')->insert([
            'rol-item' => Str::random(10),
            
        ]);

        DB::table('user_rols')->insert([
            'user_id' => rand(1,5),
            'rol_id' =>  rand(1,5),
        ]);
    }
}

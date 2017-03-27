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
        //
        DB::table('users')->insert([
        'name' => 'Anthony',
        'email' => 'anthony@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Bruce',
        'email' => 'bruce@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Charlie',
        'email' => 'charlie@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Dominic',
        'email' => 'dominic@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Edward',
        'email' => 'edward@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Frank',
        'email' => 'frank@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Gladys',
        'email' => 'gladys@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Harold',
        'email' => 'harold@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Imelda',
        'email' => 'imelda@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Jason',
        'email' => 'jason@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Kelly',
        'email' => 'kelly@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Lawrence',
        'email' => 'lawrence@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Maria',
        'email' => 'maria@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Naomi',
        'email' => 'naomi@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Oswald',
        'email' => 'oswald@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Peter',
        'email' => 'peter@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Quebee',
        'email' => 'quebee@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Raditya',
        'email' => 'raditya@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Susan',
        'email' => 'susan@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Taylor',
        'email' => 'taylor@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Uma',
        'email' => 'uma@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Vincent',
        'email' => 'vincent@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Wyatt',
        'email' => 'wyatt@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Xena',
        'email' => 'xena@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Yvone',
        'email' => 'yvone@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
        'name' => 'Zuma',
        'email' => 'zuma@perdhevi.com',
        'password' => bcrypt('secret'),
        ]);
    }
}

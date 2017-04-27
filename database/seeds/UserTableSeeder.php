<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::create([
        	'name' => 'Arne',
        	'email' => 'arnevdl@gmail.com',
        	'password' => bcrypt('Spring123456789')]);
    }
}

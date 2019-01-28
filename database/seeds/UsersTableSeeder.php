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
       $user= App\User::create([
            'name' => 'ZINA Lacina',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'admin'=>1
        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'about'=>'About zina lacina',
            'facebook'=>'facebook.com',
            'youtube'=>'yotube.com',
            'avatar'=>'uploads/avatars/1.png'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

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
             User::Create([
        	'name'  => 'sergio Morales', 
            'email' => 'frezee13@hotmail.com',
            'password' => bcrypt('erika18')
        ]);
    }
}

<?php

use App\Model\Admin\User;
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

        factory(User::class, 29)->create();
       
        User::create([
            'name' => 'Mauro J. Montenegro',
            'email' => 'mauro.montenegro@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}

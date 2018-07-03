<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role_user;

class Role_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role_user::create([
        'role_id'         =>1,
        'user_id'         =>1,
      ]);
    }
}

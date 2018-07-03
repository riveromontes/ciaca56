<?php

use Illuminate\Database\Seeder;

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

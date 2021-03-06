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
        $users = [
            [
                'name'     => 'Автор не известен',
                'email'    => 'author_unknown@g.g',
                'password' => bcrypt(Str::random(16)),
            ],
            [
                'name'     => 'Автор',
                'email'    => 'author1@g.g',
                'password' => bcrypt('123'),
            ],
        ];

        \DB::table('users')->insert($users);
    }
}

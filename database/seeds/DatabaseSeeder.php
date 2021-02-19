<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create(
            [
                'email' => 'anhar.anhar19@gmail.com',
                'name'  => 'Muhammad Anhar'
            ]
        );
        factory(User::class)->create(
            [
                'email' => 'eno.19barker@gmail.com',
                'name'  => 'Guna Putra'
            ]
        );
        factory(User::class)->create(
            [
                'email' => 'barker.19eno@gmail.com',
                'name'  => 'Muhammad Anhar Guna Putra'
            ]
        );
    }
}

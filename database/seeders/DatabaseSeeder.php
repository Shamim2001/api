<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        User::create( [
            'name'              => 'Shamim Ahmed',
            'email'             => 'api@gmail.com',
            'password'          => bcrypt( '123' ),
            'email_verified_at' => now(),
            'image'             => 'https://picsum.photos/300',
        ] );
    }
}

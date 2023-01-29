<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *     *User
+bigIncrements id
+VARCHAR name
+VARCHAR email [unique]
+TIMESTAMP email_verified_at [nullable]
+VARCHAR password
+VARCHAR remember_token [nullable]
+bigInteger group_id [nullable]
+boolean is_admin [default: false]
+TIMESTAMP created_at
+TIMESTAMP updated_at
     * @return void
     */
    public function run()
    {

       User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}

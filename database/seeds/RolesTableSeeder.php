<?php

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Roles\EloquentRole as Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
          'id' => '1',
          'slug' => 'admin',
          'name' => 'Admin User',
        ]);

        Role::firstOrCreate([
          'id' => '2',
          'slug' => 'vendor',
          'name' => 'Vendor',
        ]);
        
        Role::firstOrCreate([
          'id' => '3',
          'slug' => 'user',
          'name' => 'User',
        ]);
    }
}

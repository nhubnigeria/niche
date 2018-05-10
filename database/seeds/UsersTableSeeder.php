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
        $adminDetails = [
          'first_name' => 'Admin',
          'last_name' => 'Doe',
          'email' => 'admin@niche.com',
          'password' => 'secret'
        ];

        $admin = Sentinel::registerAndActivate($adminDetails, true);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($admin);

        $vendorDetails = [
            'first_name' => 'Vendor',
            'last_name' => 'Lee',
            'email' => 'vendor@niche.com',
            'password' => 'secret'
        ];

        $vendor = Sentinel::registerAndActivate($vendorDetails, true);
        $role = Sentinel::findRoleBySlug('vendor');
        $role->users()->attach($vendor);
        
        $userDetails = [
            'first_name' => 'User',
            'last_name' => 'John',
            'email' => 'user@niche.com',
            'password' => 'secret'
        ];

        $user = Sentinel::registerAndActivate($userDetails, true);
        $role = Sentinel::findRoleBySlug('user');
        $role->users()->attach($user);
    }
}

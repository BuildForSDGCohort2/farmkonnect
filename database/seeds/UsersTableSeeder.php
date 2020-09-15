<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
                $role_admin  = Role::where('name', 'admin')->first();
                $role_staff  = Role::where('name', 'staff')->first();
                $role_customer  = Role::where('name', 'customer')->first();
                $role_farmer  = Role::where('name', 'farmer')->first();
        
                $admin = new User();
                $admin->name = 'Rapheal Alemoh';
                $admin->email = 'admin@farmkonnect.com';
                $admin->phone = '08077842973';
                $admin->password = bcrypt('admin123_farmkonnect');
                $admin->email_verified_at = NOW();
                $admin->save();
                $admin->roles()->attach($role_admin);
        
        
                $staff = new User();
                $staff->name = 'farmkonnect staff';
                $staff->email = 'fkstaff@farmkonnect.com';
                $staff->phone = '08099897489';
                $staff->password = bcrypt('staff123_farmkonnect');
                $staff->email_verified_at = NOW();
                $staff->save();
                $staff->roles()->attach($role_staff);
        
                        
                $farmer = new User();
                $farmer->name = 'farmkonnect farmer';
                $farmer->email = 'farmer1@farmkonnect.com';
                $farmer->phone = '08099897489';
                $farmer->password = bcrypt('staff123_farmkonnect');
                $farmer->email_verified_at = NOW();
                $farmer->save();
                $farmer->roles()->attach($role_farmer);
        
    
    }
}

<?php

namespace Database\Seeders;

  
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@test',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');


        $user = User::create([
            'name' => 'Anggota',
            'email' => 'user@test',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('anggota');
    
    
    
    }
}

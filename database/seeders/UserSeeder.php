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
    
    
    $user = User::create([
        'name' => 'Ahmad Diyaz', 
        'email' => 'ahmaddiyaz.rpl3@gmail.com',
        'password' => bcrypt('123456')
    ]);

    $role = Role::create(['name' => 'superadmin']);
 
    $permissions = Permission::pluck('id','id')->all();

    $role->syncPermissions($permissions);
 
    $user->assignRole([$role->id]);
}
}

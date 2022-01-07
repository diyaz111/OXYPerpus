<?php

namespace Database\Seeders;

  
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name'=> 'web'
        ]);

        Role::create([
            'name' => 'anggota',
            'guard_name'=> 'web'
        ]);
    }
}

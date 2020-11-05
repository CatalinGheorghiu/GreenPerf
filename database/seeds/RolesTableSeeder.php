<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::truncate();
        Role::create(['name' => 'super_admin']);
        Role::create(['name' => 'admin_eiffage']);
        Role::create(['name' => 'utilisateur_eiffage']);
        Role::create(['name' => 'utilisateur_green_perf']);
    }
}

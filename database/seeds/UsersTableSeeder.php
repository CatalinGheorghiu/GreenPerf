<?php

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $superAdminRole = Role::where('name', 'super_admin')->first();
        $adminRole = Role::where('name', 'admin_eiffage')->first();
        $authorRole = Role::where('name', 'utilisateur_eiffage')->first();
        $userRole = Role::where('name', 'utilisateur_green_perf')->first();



        $admin = User::create([
            'project_id' => 1,
            'name' => 'Admin Eiffage',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin')
        ]);

        $superAdmin = User::create([
            'project_id' => 1,
            'name' => 'Super Admin',
            'email' => 'superadmin@admin.com',
            'password' => Hash::make('adminadmin')
        ]);

        $userGreenPerf = User::create([
            'project_id' => 1,
            'name' => 'Utilisateur GreenPerf',
            'email' => 'user@user.com',
            'password' => Hash::make('adminadmin')
        ]);


        $admin->roles()->attach($adminRole);
        $superAdmin->roles()->attach($superAdminRole);
        $userGreenPerf->roles()->attach($userRole);
    }
}

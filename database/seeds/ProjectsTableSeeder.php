<?php

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();
        Project::create(['nom' => 'Green Perf']);
        Project::create(['nom' => 'Cool Perf']);
        Project::create(['nom' => 'Eiffi Perf']);
    }
}

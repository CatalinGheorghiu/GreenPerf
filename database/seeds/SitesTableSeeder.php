<?php

use App\Models\Site;
use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site::truncate();
        Site::create([
            'nom' => 'GreEn-ER ',
            'code' => 'GREENER',
            'date_acceptation' => '2015-07-05',
            'date_calcul' => "2015-07-05"
        ]);
    }
}

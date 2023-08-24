<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('BrandTableSeeder');
        $this->call('BuildingTableSeeder');
        $this->call('LineTableSeeder');
    }
}

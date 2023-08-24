<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
    private $table = 'buildings';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'building' => 'Building A',
            ],
            [
                'id' => 2,
                'building' => 'Building B',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}

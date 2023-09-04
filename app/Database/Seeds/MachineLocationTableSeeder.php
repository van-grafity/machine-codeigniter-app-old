<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MachineLocationTableSeeder extends Seeder
{
    private $table = 'machine_locations';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'machine_id' => 1,
                'location_id' => 4,
                'date' => '2023-07-01',
                'time' => '20:02:00',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
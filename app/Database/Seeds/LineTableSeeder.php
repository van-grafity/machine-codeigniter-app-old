<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LineTableSeeder extends Seeder
{
    private $table = 'lines';
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'line' => 'A1',
                'description' => 'Sewing Line#1 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 2,
                'line' => 'A2',
                'description' => 'Sewing Line#2 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 3,
                'line' => 'A3',
                'description' => 'Sewing Line#3 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 4,
                'line' => 'A4',
                'description' => 'Sewing Line#4 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 5,
                'line' => 'A5',
                'description' => 'Sewing Line#5 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 6,
                'line' => 'A6',
                'description' => 'Sewing Line#6 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 7,
                'line' => 'A7',
                'description' => 'Sewing Line#7 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 8,
                'line' => 'A8',
                'description' => 'Sewing Line#8 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 9,
                'line' => 'A9',
                'description' => 'Sewing Line#9 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 10,
                'line' => 'A10',
                'description' => 'Sewing Line#10 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 11,
                'line' => 'A11',
                'description' => 'Sewing Line#11 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 12,
                'line' => 'A12',
                'description' => 'Sewing Line#12 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 13,
                'line' => 'A13',
                'description' => 'Sewing Line#13 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 14,
                'line' => 'A14',
                'description' => 'Sewing Line#14 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 15,
                'line' => 'A15',
                'description' => 'Sewing Line#15 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 16,
                'line' => 'A16',
                'description' => 'Sewing Line#16 Factory A',
                'building_id' => 1
            ],
            [
                'id' => 17,
                'line' => 'B1',
                'description' => 'Sewing Line#1 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 18,
                'line' => 'B2',
                'description' => 'Sewing Line#2 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 19,
                'line' => 'B3',
                'description' => 'Sewing Line#3 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 20,
                'line' => 'B4',
                'description' => 'Sewing Line#4 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 21,
                'line' => 'B5',
                'description' => 'Sewing Line#5 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 22,
                'line' => 'B6',
                'description' => 'Sewing Line#6 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 23,
                'line' => 'B7',
                'description' => 'Sewing Line#7 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 24,
                'line' => 'B8',
                'description' => 'Sewing Line#8 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 25,
                'line' => 'B9',
                'description' => 'Sewing Line#9 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 26,
                'line' => 'B10',
                'description' => 'Sewing Line#10 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 27,
                'line' => 'B11',
                'description' => 'Sewing Line#11 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 28,
                'line' => 'B12',
                'description' => 'Sewing Line#12 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 29,
                'line' => 'B13',
                'description' => 'Sewing Line#13 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 30,
                'line' => 'B14',
                'description' => 'Sewing Line#14 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 31,
                'line' => 'B15',
                'description' => 'Sewing Line#15 Factory B',
                'building_id' => 1
            ],
            [
                'id' => 32,
                'line' => 'B16',
                'description' => 'Sewing Line#16 Factory B',
                'building_id' => 1
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}

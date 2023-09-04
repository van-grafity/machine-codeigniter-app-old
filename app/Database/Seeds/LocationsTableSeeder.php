<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    private $table = 'locations';
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'location' => 'A1',
                'description' => 'Sewing Line#1 Factory A',
            ],
            [
                'id' => 2,
                'location' => 'A2',
                'description' => 'Sewing Line#2 Factory A',
            ],
            [
                'id' => 3,
                'location' => 'A3',
                'description' => 'Sewing Line#3 Factory A',
            ],
            [
                'id' => 4,
                'location' => 'A4',
                'description' => 'Sewing Line#4 Factory A',
            ],
            [
                'id' => 5,
                'location' => 'A5',
                'description' => 'Sewing Line#5 Factory A',
            ],
            [
                'id' => 6,
                'location' => 'A6',
                'description' => 'Sewing Line#6 Factory A',
            ],
            [
                'id' => 7,
                'location' => 'A7',
                'description' => 'Sewing Line#7 Factory A',
            ],
            [
                'id' => 8,
                'location' => 'A8',
                'description' => 'Sewing Line#8 Factory A',
            ],
            [
                'id' => 9,
                'location' => 'A9',
                'description' => 'Sewing Line#9 Factory A',
            ],
            [
                'id' => 10,
                'location' => 'A10',
                'description' => 'Sewing Line#10 Factory A',
            ],
            [
                'id' => 11,
                'location' => 'A11',
                'description' => 'Sewing Line#11 Factory A',
            ],
            [
                'id' => 12,
                'location' => 'A12',
                'description' => 'Sewing Line#12 Factory A',
            ],
            [
                'id' => 13,
                'location' => 'A13',
                'description' => 'Sewing Line#13 Factory A',
            ],
            [
                'id' => 14,
                'location' => 'A14',
                'description' => 'Sewing Line#14 Factory A',
            ],
            [
                'id' => 15,
                'location' => 'A15',
                'description' => 'Sewing Line#15 Factory A',
            ],
            [
                'id' => 16,
                'location' => 'A16',
                'description' => 'Sewing Line#16 Factory A',
            ],
            [
                'id' => 17,
                'location' => 'B1',
                'description' => 'Sewing Line#1 Factory B',
            ],
            [
                'id' => 18,
                'location' => 'B2',
                'description' => 'Sewing Line#2 Factory B',
            ],
            [
                'id' => 19,
                'location' => 'B3',
                'description' => 'Sewing Line#3 Factory B',
            ],
            [
                'id' => 20,
                'location' => 'B4',
                'description' => 'Sewing Line#4 Factory B',
            ],
            [
                'id' => 21,
                'location' => 'B5',
                'description' => 'Sewing Line#5 Factory B',
            ],
            [
                'id' => 22,
                'location' => 'B6',
                'description' => 'Sewing Line#6 Factory B',
            ],
            [
                'id' => 23,
                'location' => 'B7',
                'description' => 'Sewing Line#7 Factory B',
            ],
            [
                'id' => 24,
                'location' => 'B8',
                'description' => 'Sewing Line#8 Factory B',
            ],
            [
                'id' => 25,
                'location' => 'B9',
                'description' => 'Sewing Line#9 Factory B',
            ],
            [
                'id' => 26,
                'location' => 'B10',
                'description' => 'Sewing Line#10 Factory B',
            ],
            [
                'id' => 27,
                'location' => 'B11',
                'description' => 'Sewing Line#11 Factory B',
            ],
            [
                'id' => 28,
                'location' => 'B12',
                'description' => 'Sewing Line#12 Factory B',
            ],
            [
                'id' => 29,
                'location' => 'B13',
                'description' => 'Sewing Line#13 Factory B',
            ],
            [
                'id' => 30,
                'location' => 'B14',
                'description' => 'Sewing Line#14 Factory B',
            ],
            [
                'id' => 31,
                'location' => 'B15',
                'description' => 'Sewing Line#15 Factory B',
            ],
            [
                'id' => 32,
                'location' => 'B16',
                'description' => 'Sewing Line#16 Factory B',
            ],
            [
                'id' => 33,
                'location' => 'Offline A',
                'description' => 'Offline Factory A',
            ],
            [
                'id' => 34,
                'location' => 'Offline B',
                'description' => 'Offline Factory B',
            ],
            [
                'id' => 35,
                'location' => 'Warehouse',
                'description' => 'Warehouse',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}

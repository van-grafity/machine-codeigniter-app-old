<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    private $table = 'brands';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'brand' => 'Siruba',
            ],
            [
                'id' => 2,
                'brand' => 'Brother',
            ],
            [
                'id' => 3,
                'brand' => 'Okurma',
            ],
            [
                'id' => 4,
                'brand' => 'Juki',
            ],
            [
                'id' => 5,
                'brand' => 'UPFAFF',
            ],
            [
                'id' => 6,
                'brand' => 'Stobel',
            ],
            [
                'id' => 7,
                'brand' => 'TONY',
            ],
            [
                'id' => 8,
                'brand' => 'Pegasus',
            ],
            [
                'id' => 9,
                'brand' => 'Shing Ray',
            ],
            [
                'id' => 10,
                'brand' => 'Shing Ling',
            ],
            [
                'id' => 11,
                'brand' => 'Sakgo',
            ],
            [
                'id' => 12,
                'brand' => 'Kansai',
            ],
            [
                'id' => 13,
                'brand' => 'Sunstar',
            ],
            [
                'id' => 14,
                'brand' => 'Murata',
            ],
            [
                'id' => 15,
                'brand' => 'Gemsy',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}

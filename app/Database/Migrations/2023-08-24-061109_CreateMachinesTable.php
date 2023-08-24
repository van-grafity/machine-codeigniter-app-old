<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMachinesTable extends Migration
{
    private $table = 'machines';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'bigint',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'kind_of_machine' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'brand_id' => [
                'type' => 'bigint',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('brand_id', 'brands', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}

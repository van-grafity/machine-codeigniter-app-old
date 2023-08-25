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
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'machine_type_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'brand_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'model' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'serial_number' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('machine_type_id', 'machine_types', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->addForeignKey('brand_id', 'brands', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}

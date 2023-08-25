<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMachineTypesTable extends Migration
{
    private $table = 'machine_types';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'machine_type' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}

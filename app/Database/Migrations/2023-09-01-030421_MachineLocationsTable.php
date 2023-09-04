<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MachineLocationsTable extends Migration
{
    private $table = 'machine_locations';
    
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'machine_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'location_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'date' => [
                'type' => 'date',
                'null' => false,
            ],
            'time' => [
                'type' => 'time',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('machine_id', 'machines', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->addForeignKey('location_id', 'locations', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}

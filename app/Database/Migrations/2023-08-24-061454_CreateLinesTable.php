<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLinesTable extends Migration
{
    private $table = 'lines';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'bigint',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'line' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'building_id' => [
                'type' => 'bigint',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('building_id', 'buildings', 'id', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}

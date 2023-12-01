<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MentorTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'pelajaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'jampel'    => [
                'type' => 'DATE',
            ],
            'alias'     => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('mentor');
    }

    public function down()
    {
        $this->forge->dropTable('mentor');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_lengkap'   => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat'         => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email'          => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'no_hp'          => [
                'type'       => 'VARCHAR',
                'constraint' => '14',
            ],
            'asal_sekolah'   => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nominal'        => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'token'          => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_order'       => [
                'type'       => 'INT',
                'constraint' => 100,
            ],
            'alias'          => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_mentor'      => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('daftar');

        $this->forge->addColumn('daftar', [
            'CONSTRAINT fk_daftar_mentor_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
        ]);

        // Set foreign key
        $this->forge->addForeignKey('fk_daftar_mentor_id', 'mentor', 'id', 'CASCADE', 'SET NULL');
        
    }

    public function down()
    {
        $this->forge->dropTable('daftar');
    }
}

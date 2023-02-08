<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'username'      => ['type' => 'varchar', 'constraint' => 50, 'unique' => true],
            'email'         => ['type' => 'varchar', 'constraint' => 80, 'unique' => true],
            'password'      => ['type' => 'varchar', 'constraint' => 255],
            'perfil_id'     => ['type' => 'int', 'constraint' => 1, 'unsigned' => true, 'auto_increment' => false],
            'created_at'    => ['type' => 'datetime', 'null' => false],
            'updated_at'    => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('usuarios', true);
    }

    public function down()
    {
        $this->forge->dropTable('usuarios', true);
    }
}

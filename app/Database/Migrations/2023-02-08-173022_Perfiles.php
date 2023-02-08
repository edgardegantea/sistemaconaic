<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perfiles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 1, 'unsigned' => true, 'auto_increment' => true],
            'nombre'        => ['type' => 'varchar', 'constraint' => 50],
            'descripcion'   => ['type' => 'text', 'null' => true],
            'created_at'    => ['type' => 'datetime', 'null' => false],
            'updated_at'    => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('perfiles', true);
    }

    public function down()
    {
        $this->forge->dropTable('perfiles', true);
    }
}

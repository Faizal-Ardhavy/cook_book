<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resep extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'id',
            ],
            'resep'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'penjelasan_resep'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'gambar_resep' => [
                'type'           => 'VARCHAR',
                'constraint'            => '1000',
            ],

        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('resep');
    }

    public function down()
    {
        $this->forge->dropTable('resep');
        }
}

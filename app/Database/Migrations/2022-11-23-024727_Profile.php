<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'id',
            ],
            'id_user'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'pekerjaan' => [
                'type'           => 'VARCHAR',
                'constraint'            => '1000',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'            => '1000',
            ],
            'telp' => [
                'type'           => 'INT',
                'constraint'            => '22',
            ],

        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('profile');
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}

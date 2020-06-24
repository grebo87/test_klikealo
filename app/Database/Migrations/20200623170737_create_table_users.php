<?php

namespace App\Database\Migrations;

class CreateTableUsers extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                                'null'           => TRUE,
                        ],
                        'surnames' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                                'null'           => TRUE,
                        ],
                        'phone' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '30',
                                'null'           => TRUE,
                        ],
                        'email' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'password' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'status' => [
                                'type'           => 'BOOLEAN',
                                'default'        => false,
                        ],
                        'created_at' => [
                                'type'           => 'DATETIME',
                                'null'           => TRUE,
                        ],
                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => TRUE,
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => TRUE,
                        ],
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('users');
        }

        public function down()
        {
                $this->forge->dropTable('users');
        }
}

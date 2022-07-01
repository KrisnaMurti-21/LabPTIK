<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fasilitas extends Migration
{
    public function up()
    {
        $this -> forge -> addField([
            'id' => [
                'type'      => 'INT',
                'constraint' => '11',
                'unsigned' => 'true',
                'auto_increment' => 'true',
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'contstraint' => '255',
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'contstraint' => '255',
            ],
            'jumlah' => [
                'type' => 'INT',
                'contstraint' => '100',
            ],
            'created_at'=> [ 
            'type'=> 'DATETIME',
            'null' => TRUE,
            ],
            'updated_at'=> [ 
            'type'=> 'DATETIME',
            'null' => TRUE,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('fasilitas');
    }

    public function down()
    {
        //
    }
}

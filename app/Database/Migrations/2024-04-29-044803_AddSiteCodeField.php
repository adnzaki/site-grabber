<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSiteCodeField extends Migration
{
    public function up()
    {
        $field = [
            'site_code' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'after' => 'name',
            ],
        ];
        $this->forge->addColumn('site_list', $field);
    }

    public function down()
    {
        //
    }
}

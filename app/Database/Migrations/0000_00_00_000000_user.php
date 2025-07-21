<?php
namespace App\Database\migrations;

use App\Core\Database\Migration;

class User extends Migration
{
    public function up()
    {
        // Код миграции
        $this->createTable('user', function($table) {
            $table->increments('id');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        $this->dropTable('user');
    }
}
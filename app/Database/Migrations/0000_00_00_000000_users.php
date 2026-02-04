<?php
namespace App\Database\migrations;

use App\Core\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // Код миграции
        $this->createTable('users', function($table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('email', 100);
            $table->string('password', 200);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        $this->dropTable('user');
    }
}
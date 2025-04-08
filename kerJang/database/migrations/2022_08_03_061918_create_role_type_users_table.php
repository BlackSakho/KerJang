<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Assure-toi que ce use est bien présent

class CreateRoleTypeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_type_users', function (Blueprint $table) {
            $table->id();
            $table->string('role_type')->nullable();
            $table->timestamps();
        });

        // Insertion modifiée sans Staff, Client, Super Admin, Normal User
        DB::table('role_type_users')->insert([
            ['role_type' => 'Admin'],
            ['role_type' => 'Teachers'],
            ['role_type' => 'Student'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_type_users');
    }
}


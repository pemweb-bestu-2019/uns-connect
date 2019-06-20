<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->string('nik');
            $table->string('name');
            $table->enum('gender', ['L', 'P']);
            $table->string('birth_place');
            $table->date('birth_date');
            $table->enum('religion', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']);
            $table->char('phone_number', 13);
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->timestamps();

            $table->primary('id_user');
            $table->foreign('id_user')
                ->references('id_user')->on('users')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}

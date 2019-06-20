<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('id_organization');
            $table->unsignedBigInteger('id_user');
            $table->string('name');
            $table->string('name_short');
            $table->text('description');
            $table->string('address');
            $table->char('phone_number', 13)->nullable();
            $table->string('website')->nullable();
            $table->integer('registration_fee');
            $table->timestamps();

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
        Schema::dropIfExists('organizations');
    }
}

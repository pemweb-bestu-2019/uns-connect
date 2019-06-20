<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->bigIncrements('id_membership');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_organization');
            $table->unsignedBigInteger('id_division');
            $table->date('date_expired');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('restrict');
            $table->foreign('id_organization')->references('id_organization')->on('organizations')->onDelete('restrict');
            $table->foreign('id_division')->references('id_division')->on('divisions')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_invoices', function (Blueprint $table) {
            $table->bigIncrements('id_membership_invoice');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_organization');
            $table->dateTime('date');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('restrict');
            $table->foreign('id_organization')->references('id_organization')->on('organizations')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_invoices');
    }
}

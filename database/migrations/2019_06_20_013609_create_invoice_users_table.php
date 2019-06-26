<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_users', function (Blueprint $table) {
            $table->bigIncrements('id_invoice_user');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_users');
    }
}

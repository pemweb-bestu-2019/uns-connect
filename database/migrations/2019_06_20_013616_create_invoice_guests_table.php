<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_guests', function (Blueprint $table) {
            $table->bigIncrements('id_invoice_guest');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_guests');
    }
}

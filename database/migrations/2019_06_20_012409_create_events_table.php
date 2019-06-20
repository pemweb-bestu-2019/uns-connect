<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id_event');
            $table->unsignedBigInteger('id_organization');
            $table->string('slug');
            $table->string('name');
            $table->text('description');
            $table->unsignedInteger('quota')->default(0);
            $table->dateTime('date_eventday');
            $table->dateTime('date_register_close');
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('long', 10, 7)->nullable();
            $table->boolean('is_private')->default(false);
            $table->timestamps();

            $table->foreign('id_organization')
                ->references('id_organization')->on('organizations')
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
        Schema::dropIfExists('events');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('events_id');
            $table->integer('ticket_id');
            $table->text('ticket_no');
            $table->float('price');
            $table->foreign('events_id')
                ->references('id')->on('events')->onDelete('cascade');
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
        Schema::dropIfExists('events_tickets');
    }
};
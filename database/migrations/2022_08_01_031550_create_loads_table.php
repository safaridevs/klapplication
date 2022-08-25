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
        Schema::create('loads', function (Blueprint $table) {
            $table->id();
            $table->string('from_state');
            $table->string('to_state');
            $table->string('pick_date');
            $table->string('delivery_date')->nullable();
            $table->string('amount');
            $table->string('miles')->nullable();
            $table->integer('delivery_status_id')->default(1);
            $table->integer('document_id')->nullable();
            $table->integer('broker_id')->nullable();

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
        Schema::dropIfExists('loads');
    }
};

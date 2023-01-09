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
        Schema::create('tours', function (Blueprint $table) {
            
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->string('wisata');
            $table->datetime('purchase_date');
            $table->string('name');
            $table->string('no_hp');
            $table->text('email');
            $table->bigInteger('jumlah');
            $table->string('total');
            $table->string('metode_pembayaran');
            $table->string('status');
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
        Schema::dropIfExists('table_tours');
    }
};

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
     Schema::create('pembayarans', function (Blueprint $table) {
            
        $table->id();
        $table->string('name');
        $table->string('no_hp');
        $table->text('email');
        $table->bigInteger('jumlah');
        $table->string('total');
        $table->string('foto');
        $table->integer('tour_id');
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
    Schema::dropIfExists('pembayarans');
}
};

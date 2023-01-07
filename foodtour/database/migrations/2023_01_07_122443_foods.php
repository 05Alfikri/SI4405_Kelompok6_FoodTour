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
        Schema::create('foods', function (Blueprint $table) {
            
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->bigInteger('id_user')->unsigned();
            $table->string('name');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('menu');
            $table->bigInteger('jumlah');
            $table->string('total');
            $table->timestamps();

            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

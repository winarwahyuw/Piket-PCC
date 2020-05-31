<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piket', function (Blueprint $table) {
            $table->bigIncrements('id_piket');
            $table->string('nim',13)->foreign()
                                    ->references('nim')
                                    ->on('user');
            $table->timeTz('mulai_piket');
            $table->timeTz('selesai_piket');
            $table->string('aktivitas', 200)->change();
            $table->enum('status',['sedang berlangsung','selesai'])
                    ->default('sedang berlangsung')
                    ->change();
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
        Schema::dropIfExists('piket');
    }
}

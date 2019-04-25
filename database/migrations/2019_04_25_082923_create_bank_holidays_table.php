<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_holidays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
                $table->string('title');
            $table->date('date');
            $table->string('notes');
            $table->boolean('bunting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_holidays');
    }
}

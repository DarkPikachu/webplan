<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCircularLetterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circular_letter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('letter_code',30);
            $table->string('letter_name',300);
            $table->date('letter_date');
            $table->date('issue_date');
            $table->integer('catalog');
            $table->integer('view_count');
            $table->integer('download_count');
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
        Schema::dropIfExists('circular_letter');
    }
}

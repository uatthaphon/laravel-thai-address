<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThailandDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thailand_districts', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('code');
            $table->string('name_in_thai', 150);
            $table->string('name_in_english', 150);
            $table->integer('province_id')->unsigned();

            $table->unique('code', 'ux_thailand_districts_code');
            $table->index('province_id', 'ix_thailand_districts_province_id');

            $table->foreign('province_id', 'fk_thailand_districts_thailand_provinces')
                ->references('id')
                ->on('thailand_provinces')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thailand_districts');
    }
}

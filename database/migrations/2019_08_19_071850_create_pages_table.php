<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_name', 100);
            $table->string('page_title', 100);
            $table->string('page_prefix', 100);
            $table->string('page_alias', 100);
            $table->text('page_desc');
            $table->text('page_keywords');
            $table->string('page_style', 100);
            $table->string('page_script');
            $table->string('page_robots', 100);
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
        Schema::dropIfExists('pages');
    }
}

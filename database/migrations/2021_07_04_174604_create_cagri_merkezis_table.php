<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCagriMerkezisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cagri_merkezis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('phone');
            $table->string('web-site')->nullable();
            $table->string('social-media-1')->nullable();
            $table->string('social-media-2')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
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
        Schema::dropIfExists('cagri_merkezis');
    }
}

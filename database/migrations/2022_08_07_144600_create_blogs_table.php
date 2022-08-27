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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('title')->nullable();
            $table->bigInteger('author_id');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default(0)->nullable()->comment('0 => Published; 1 => Unpublished');
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
        Schema::dropIfExists('blogs');
    }
};

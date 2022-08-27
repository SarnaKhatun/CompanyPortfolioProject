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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->text('address')->nullable();
            $table->text('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('nid')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1)->comment(' 1 => Published; 0 => Unpublished;');
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
        Schema::dropIfExists('user_details');
    }
};

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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->string('hours')->nullable();
            $table->string('duration')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('type')->nullable();
            $table->string('slug')->nullable();
            $table->string('country')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('events');
    }
};

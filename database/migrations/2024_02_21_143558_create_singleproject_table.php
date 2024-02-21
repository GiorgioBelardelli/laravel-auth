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
        Schema::create('single_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projects_id')->constrained();
            $table->string('nome_progetto');
            $table->string('desc_progetto');
            $table->string('path_progetto')->default('https://picsum.photos/480/360');
            $table->integer('counter_vis');
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
        Schema::dropIfExists('single_projects');
    }
};

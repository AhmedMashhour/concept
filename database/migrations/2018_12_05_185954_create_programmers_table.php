<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191);
            $table->string('email',191)->unique();
            $table->string('job',191);
            $table->string('photo',191)->nullable();
            $table->string('facebook',191)->nullable();
            $table->string('tweeter',191)->nullable();
            $table->string('git',191)->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('programmers');
    }
}

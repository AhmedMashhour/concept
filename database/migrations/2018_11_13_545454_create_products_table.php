<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',191)->nullable();
            $table->string('photo',191)->nullable();
            $table->longText('content',191)->nullable();
            $table->integer('stock')->default(0)->nullable();
            $table->decimal('price',5,2)->nullable();
            $table->decimal('price_offer',5,2)->nullable();
            $table->enum('status',['pending','refused','active'])->default('pending');
            $table->longText('reason')->nullable();
            $table->date('end_at')->nullable();
            $table->date('start_at')->nullable();
            $table->date('start_offer_at')->nullable();
            $table->date('end_offer_at')->nullable();
            $table->longText('other_data')->nullable();

            $table->integer('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');



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
        Schema::dropIfExists('products');
    }
}

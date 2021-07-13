<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            // $table->unsignedInteger('student_id')->index();
            $table->string('p_title');
            $table->string('p_name');
            $table->string('slug');
            $table->string('p_description')->nullable();
            $table->unsignedInteger('p_quantity');
            $table->decimal('p_ammount', 8, 2)->nullable();


            // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

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

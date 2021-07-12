<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number')->unique();
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');

            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            $table->decimal('grand_total', 20, 6);
            $table->unsignedInteger('item_count');

            $table->boolean('payment_status')->default(1);
            $table->string('payment_method')->nullable();

            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->string('city');
            $table->string('country');
            $table->string('post_code');
            $table->string('phone_number');
            $table->text('notes')->nullable();

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
        Schema::dropIfExists('models_orders');
    }
}

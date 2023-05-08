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
        Schema::create('trainer_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('UserId')->constrained('users')->onDelete('cascade');
            $table->integer('phoneNumber');
            $table->string('email');
            $table->foreignId('TrainerServiceId')->constrained('personal_trainer_services')->onDelete('cascade');
            $table->date('res_date');
            $table->decimal('price');
            $table->string('status')->default('Pending');
            $table->text('comment')->nullable();
            $table->string('TrainerName');
            $table->string('code')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('trainer_reservations');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('clinic_name')->nullable();
            $table->string('contact_name');
            $table->string('contact_email')->unique();
            $table->string('contact_phone')->nullable();
            $table->string('specialization')->nullable();
            $table->string('practice_size')->nullable();
            $table->text('telehealth')->nullable();
            $table->timestamp('preferred_demo_time')->nullable();
            $table->string('about_us')->nullable();
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
        Schema::dropIfExists('clinic_submissions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('clinic_submissions', function (Blueprint $table) {
            $table->string('contact_email')->nullable()->change();
            $table->dropUnique('clinic_submissions_contact_email_unique');
        });
    }

    public function down()
    {
        Schema::table('clinic_submissions', function (Blueprint $table) {
            $table->string('contact_email')->nullable(false)->change();
            $table->unique('contact_email');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 255)->nullable(); // Specify length for clarity
            $table->string('first_name', 100); // Limit length if applicable
            $table->string('last_name', 100)->nullable(); // Limit length if applicable
            $table->string('email', 150)->nullable(); // Nullable but with a defined length
            $table->string('phone', 20)->nullable(); // Nullable but with a defined length
            $table->string('services'); // Replaced enum for flexibility
            $table->string('about'); // Replaced enum for flexibility
            $table->text('details')->nullable();
            $table->boolean('is_read')->default(false); // Use boolean for true/false
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_submissions');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->int('phone_number');
            $table->string('email_address');
            $table->string('identification');
            $table->date('date_of_birth');
            $table->string('company_position');
            $table->string('witnesses');
            $table->date('effective_date');
            $table->text('payment_information');
            $table->string('jurisdiction');
            $table->string('signature_party1'); // Assuming this is a file path, adjust accordingly
            $table->string('notary_public')->nullable();
            $table->text('terms_conditions');
            $table->string('file_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};

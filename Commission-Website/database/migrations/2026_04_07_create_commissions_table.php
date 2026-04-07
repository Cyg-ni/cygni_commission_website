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
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->string('commissioner_name');
            $table->string('commissioner_email');
            $table->string('commissioner_discord')->nullable();
            $table->string('commission_type');
            $table->string('budget')->nullable();
            $table->date('deadline')->nullable();
            $table->text('project_brief');
            $table->text('notes')->nullable();
            $table->date('date_started')->nullable();
            $table->enum('payment_status', ['yet_to_receive', 'paid', 'fully_paid'])->default('yet_to_receive');
            $table->enum('phase', ['sketch', 'lineart', 'rendering'])->default('sketch');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commissions');
    }
};

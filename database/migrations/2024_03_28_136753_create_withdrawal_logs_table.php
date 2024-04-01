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
        Schema::create('withdrawal_logs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('amount');
            $table->string('action');
            $table->string('platform');
            $table->string('ip_address');
            $table->foreignUuid('bank_account_log_id')->references('id')->on('bank_account_logs')->onDelete('cascade');
            $table->foreignUuid('user_log_id')->references('id')->on('user_logs')->onDelete('cascade');
            $table->foreignUuid('withdrawal_id')->references('id')->on('withdrawals')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawal_logs');
    }
};

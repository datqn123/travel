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
        Schema::table('user_login', function (Blueprint $table) {
            $table->string('otp_hash')->nullable()->after('password');
            $table->timestamp('otp_expires_at')->nullable()->after('otp_hash');
            $table->unsignedTinyInteger('otp_attempts')->default(0)->after('otp_expires_at'); 
            $table->boolean('is_verified')->default(false)->after('otp_attempts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_login', function (Blueprint $table) {
            $table->dropColumn(['otp_hash', 'otp_expires_at', 'otp_attempts', 'is_verified']);
        });
    }
};

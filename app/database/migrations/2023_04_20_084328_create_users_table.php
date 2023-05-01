<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('fullname');
            $table->string('cin')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->date('birthdate');
            $table->boolean('is_admin')->default(false);
            $table->integer('penalities')->default(0);
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('profile_picture')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

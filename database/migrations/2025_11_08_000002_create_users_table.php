<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('nickname', 100)->nullable();
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->string('roles', 50)->default('user');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('users');
    }
};

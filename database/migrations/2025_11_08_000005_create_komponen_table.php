<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('komponen', function (Blueprint $table) {
            $table->bigIncrements('component_id');
            $table->string('nama_component', 150);
            $table->string('nama_satuan', 50)->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('komponen');
    }
};

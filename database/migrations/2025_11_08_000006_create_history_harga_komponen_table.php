<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('history_harga_komponen', function (Blueprint $table) {
            $table->bigIncrements('cp_history_id');
            $table->unsignedBigInteger('component_id');
            $table->decimal('harga_acuan', 15, 2)->default(0);
            $table->date('tanggal_berlaku')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('component_id')->references('component_id')->on('komponen')
                  ->cascadeOnUpdate()->restrictOnDelete();
            $table->unique(['component_id', 'tanggal_berlaku']);
        });
    }
    public function down(): void {
        Schema::dropIfExists('history_harga_komponen');
    }
};

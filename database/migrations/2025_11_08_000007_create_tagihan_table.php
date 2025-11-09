<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->string('no_tag', 64)->primary();
            $table->string('no_sp', 64);
            $table->enum('status_pembayaran', ['pending','dibayar','telat','batal'])->default('pending');
            $table->date('tenggat_pembayaran')->nullable();
            $table->timestamps();

            $table->foreign('no_sp')->references('no_sp')->on('surat_penawaran')
                  ->cascadeOnUpdate()->restrictOnDelete();
            $table->index('no_sp');
        });
    }
    public function down(): void {
        Schema::dropIfExists('tagihan');
    }
};

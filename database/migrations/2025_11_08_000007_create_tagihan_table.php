<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->string('no_tag', 64)->primary();
            $table->unsignedBigInteger('sp_id');
            $table->enum('status_pembayaran', ['pending','dibayar','telat','batal'])->default('pending');
            $table->date('tenggat_pembayaran')->nullable();
            $table->timestamps();

            $table->foreign('sp_id')->references('sp_id')->on('surat_penawaran')
                  ->cascadeOnUpdate()->restrictOnDelete();
            $table->index('sp_id');
        });
    }
    public function down(): void {
        Schema::dropIfExists('tagihan');
    }
};

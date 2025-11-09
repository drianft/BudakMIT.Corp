<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('surat_penawaran', function (Blueprint $table) {
            $table->string('no_sp', 64)->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('company_id');
            $table->string('perihal', 200)->nullable();
            $table->date('tanggal_surat_penawaran')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')
                  ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('company_id')->references('company_id')->on('perusahaan')
                  ->cascadeOnUpdate()->restrictOnDelete();
        });
    }
    public function down(): void {
        Schema::dropIfExists('surat_penawaran');
    }
};

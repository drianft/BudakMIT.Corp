<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('job_id');
            $table->unsignedBigInteger('sp_id');
            $table->string('nama_pekerjaan', 200);
            $table->string('nama_mesin', 200)->nullable();
            $table->text('spesifikasi_mesin')->nullable();
            $table->timestamps();

            $table->foreign('sp_id')->references('sp_id')->on('surat_penawaran')
                  ->cascadeOnUpdate()->restrictOnDelete();
            $table->index('sp_id');
        });
    }
    public function down(): void {
        Schema::dropIfExists('jobs');
    }
};

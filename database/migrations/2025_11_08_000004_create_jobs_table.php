<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('job_id');
            $table->string('no_sp', 64);
            $table->string('nama_pekerjaan', 200);
            $table->string('nama_mesin', 200)->nullable();
            $table->text('spesifikasi_mesin')->nullable();
            $table->timestamps();

            $table->foreign('no_sp')->references('no_sp')->on('surat_penawaran')
                  ->cascadeOnUpdate()->restrictOnDelete();
            $table->index('no_sp');
        });
    }
    public function down(): void {
        Schema::dropIfExists('jobs');
    }
};

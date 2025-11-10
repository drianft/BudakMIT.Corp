<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->bigIncrements('company_id');
            $table->string('nama_perusahaan', 150);
            $table->text('alamat_perusahaan')->nullable();
            $table->string('no_telp_perusahaan', 50)->nullable();
            $table->string('email_perusahaan', 150)->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('perusahaan');
    }
};

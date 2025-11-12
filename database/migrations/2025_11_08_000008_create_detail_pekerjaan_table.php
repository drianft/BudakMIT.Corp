<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('detail_pekerjaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('component_id');
            $table->integer('qty')->default(1);
            $table->decimal('harga_aktual', 15, 2)->default(0);
            $table->timestamps();

            $table->foreign('job_id')->references('job_id')->on('jobs')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('component_id')->references('component_id')->on('komponen')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->unique(['job_id', 'component_id']);
        });
    }
    public function down(): void {
        Schema::dropIfExists('detail_pekerjaan');
    }
};

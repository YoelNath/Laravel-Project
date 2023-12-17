<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            // $table->foreignId("jurusan_id");
            // $table->foreignid("kampus_binus_id");
            $table->bigInteger("nim");
            $table->string("nama",120);
            $table->string("alamat");
            $table->timestamps();
            
            // $table->foreign("jurusan_id")->references("id")->on("jurusan");
            

            // $table->foreign("kampus_binus_id")->references("id")->on("kampus");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};

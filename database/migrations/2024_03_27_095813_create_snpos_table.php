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
        Schema::create('snpos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('snpos_owner_id')->nullable();
            $table->foreign('snpos_owner_id')->references('id')->on('snpos_owners')->onDelete('cascade');
            $table->unsignedBigInteger('snpos_file_id');
            $table->foreign('snpos_file_id')->references('id')->on('snpos_files')->onDelete('cascade');
            $table->string('snpos');
            $table->decimal('bruto', total: 8, places: 2);
            $table->decimal('liquido', total: 8, places: 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('snpos');
    }
};

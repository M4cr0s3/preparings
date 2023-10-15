<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('specs');
            $table->unsignedBigInteger('cabinet_id');
            $table->index('cabinet_id', 'computer_cabinet_idx');
            $table->foreign('cabinet_id')->references('id')->on('cabinets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};

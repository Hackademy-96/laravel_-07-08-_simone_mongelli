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
        Schema::create('console_design', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('console_id');
            $table->foreign('console_id')->references('id')->on('consoles');

            $table->unsignedBigInteger('design_id');
            $table->foreign('design_id')->references('id')->on('designs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('console_design');
    }
};

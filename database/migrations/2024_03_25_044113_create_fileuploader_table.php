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
        Schema::create('fileuploader', function (Blueprint $table) {
            $table->string('code_doc', 50)->primary();
            $table->string('name_file', 100);
            $table->varchar('path_file', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fileuploader');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->string('course');
            $table->timestamps();
            $table->foreignId('client_id')->constrained(
                table: 'clients',
                indexName: 'project_client_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    // rollback akan menjalankan function down
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

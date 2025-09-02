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
        Schema::create('project',function(Blueprint $table){

            $table->id();
            $table->string('name');
            $table->text('description');
            $table->date('st_date');
            $table->date('end_date');
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('architect_id')->constrained('architect');
            $table->foreignId('blueprint_id')->constrained('blueprint');
            $table->foreignId('zone_id')->constrained('zone');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};

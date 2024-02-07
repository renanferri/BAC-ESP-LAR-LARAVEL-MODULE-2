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
        Schema::create('signature_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('signature_id')->constrained();
            $table->timestamp('last_updated_at');
            $table->integer('old_plan_id');
            $table->smallInteger('old_status');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signature_histories');
    }
};

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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('institution_id');
            $table->integer('subject_id');
            $table->integer('major_id');
            $table->text('advantages');
            $table->text('disadvantages');
            $table->text('suggestions')->nullable();
            $table->text('property_titles');
            $table->text('property_details');
            $table->text('property_states');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};

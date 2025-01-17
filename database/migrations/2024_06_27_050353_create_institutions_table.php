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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('state_id');
            $table->integer('type_id');
            $table->string('code');
            $table->string('name');
            $table->string('phone');
            $table->text('address');
            $table->string('principle');
            $table->enum('gender', ['Male', 'Female', 'Mix']);
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};

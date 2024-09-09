<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the questions table
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text');
            $table->decimal('multiplier', 5, 2)->default(1);  // Multiplier for core questions like fear, conflict
            $table->timestamps();
        });

        // Create the answers table
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');
            $table->string('answer_text');
            $table->decimal('type_1_weight', 5, 2)->default(0);
            $table->decimal('type_2_weight', 5, 2)->default(0);
            $table->decimal('type_3_weight', 5, 2)->default(0);
            $table->decimal('type_4_weight', 5, 2)->default(0);
            $table->decimal('type_5_weight', 5, 2)->default(0);
            $table->decimal('type_6_weight', 5, 2)->default(0);
            $table->decimal('type_7_weight', 5, 2)->default(0);
            $table->decimal('type_8_weight', 5, 2)->default(0);
            $table->decimal('type_9_weight', 5, 2)->default(0);
            $table->timestamps();
        });

        // Create the results table
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');  // Nullable in case of anonymous users
            $table->foreignId('question_id')->constrained('questions')->onDelete('cascade');
            $table->foreignId('answer_id')->constrained('answers')->onDelete('cascade');
            $table->string('final_type')->nullable();  // Final Enneagram type after assessment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('questions');
    }
};

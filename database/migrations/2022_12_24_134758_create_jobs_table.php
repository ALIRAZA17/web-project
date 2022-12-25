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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('Company_name');
            $table->string('Job_title');
            $table->string('Job_location');
            $table->string('Job_mode');
            $table->string('Job_category');
            $table->string('Job_deadline');
            $table->string('Company_url');
            $table->string('Job_skills');
            $table->longText('Job_description');
            $table->string('Company_logo');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
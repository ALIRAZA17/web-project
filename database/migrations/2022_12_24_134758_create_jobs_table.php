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
            $table->string('company_name');
            $table->string('job_title');
            $table->string('job_location');
            $table->string('job_mode');
            $table->string('job_category');
            $table->string('job_deadline');
            $table->string('company_url');
            $table->string('job_skills');
            $table->longText('job_description');
            $table->string('company_logo');
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
        Schema::dropIfExists('jobs');
    }
};
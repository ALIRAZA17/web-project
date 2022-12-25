<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('profile_photo');
            $table->string('prof_title');
            $table->longText('pitch');
            $table->string('email');
            $table->string('phone');
            $table->longText('address');
            $table->string('city');
            $table->string('country');
            $table->string('linkedIn');
            $table->string('l1');
            $table->string('l2');
            $table->string('l3');
            $table->string('p1');
            $table->string('p2');
            $table->string('p3');
            $table->string('s_skill1');
            $table->string('s_skill2');
            $table->string('s_skill3');
            $table->string('s_skill4');
            $table->string('s_skill5');
            $table->string('t_skill1');
            $table->string('t_skill2');
            $table->string('t_skill3');
            $table->string('t_skill4');
            $table->string('t_skill5');
            $table->string('t_skill6');
            $table->string('t_skill7');
            $table->string('t_skill8');
            $table->string('t_skill9');
            $table->string('t_skill10');
            $table->string('study_program1');
            $table->string('study_program2');
            $table->string('study_program3');
            $table->string('institution1');
            $table->string('institution2');
            $table->string('institution3');
            $table->date('program_start1');
            $table->date('program_start2');
            $table->date('program_start3');
            $table->date('program_end1');
            $table->date('program_end2');
            $table->date('program_end3');
            $table->string('institution_city1');
            $table->string('institution_city2');
            $table->string('institution_city3');
            $table->string('institution_country1');
            $table->string('institution_country2');
            $table->string('institution_country3');
            $table->longText('related_info1');
            $table->longText('related_info2');
            $table->longText('related_info3');
            $table->string('work_title1');
            $table->string('work_title2');
            $table->string('work_title3');
            $table->string('work_company1');
            $table->string('work_company2');
            $table->string('work_company3');
            $table->date('work_start1');
            $table->date('work_start2');
            $table->date('work_start3');
            $table->date('work_end1');
            $table->date('work_end2');
            $table->date('work_end3');
            $table->string('work_city1');
            $table->string('work_city2');
            $table->string('work_city3');
            $table->string('work_country1');
            $table->string('work_country2');
            $table->string('work_country3');
            $table->string('work_mode1');
            $table->string('work_mode2');
            $table->string('work_mode3');
            $table->longText('work_description1');
            $table->longText('work_description2');
            $table->longText('work_description3');
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
        Schema::dropIfExists('resume_info');
    }
};

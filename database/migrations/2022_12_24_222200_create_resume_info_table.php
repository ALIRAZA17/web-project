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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('title');
            $table->longText('pitch');
            $table->string('photo')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->longText('address');
            $table->string('city');
            $table->string('country');
            $table->string('url');
            $table->string('lan1');
            $table->string('lancat1');
            $table->string('lan2')->nullable();
            $table->string('lancat2')->nullable();
            $table->string('lan3')->nullable();
            $table->string('lancat3')->nullable();
            $table->string('sskill1');
            $table->string('sskill2')->nullable();
            $table->string('sskill3')->nullable();
            $table->string('sskill4')->nullable();
            $table->string('sskill5')->nullable();
            $table->string('tskill1');
            $table->string('tskill2')->nullable();
            $table->string('tskill3')->nullable();
            $table->string('tskill4')->nullable();
            $table->string('tskill5')->nullable();
            $table->string('tskill6')->nullable();
            $table->string('tskill7')->nullable();
            $table->string('tskill8')->nullable();
            $table->string('tskill9')->nullable();
            $table->string('tskill10')->nullable();
            $table->string('program1');
            $table->string('school1');
            $table->date('programDateFrom1');
            $table->date('programDateTo1');
            $table->string('insCity1');
            $table->string('insCountry1');
            $table->longText('info1')->nullable();

            $table->string('program2')->nullable();
            $table->string('school2')->nullable();
            $table->date('programDateFrom2')->nullable();
            $table->date('programDateTo2')->nullable();
            $table->string('insCity2')->nullable();
            $table->string('insCountry2')->nullable();
            $table->longText('info2')->nullable();

            $table->string('program3')->nullable();
            $table->string('school3')->nullable();
            $table->date('programDateFrom3')->nullable();
            $table->date('programDateTo3')->nullable();
            $table->string('insCity3')->nullable();
            $table->string('insCountry3')->nullable();
            $table->longText('info3')->nullable();


            $table->string('position1');
            $table->string('company1');
            $table->date('workDateFrom1');
            $table->date('workDateTo1');
            $table->string('workCity1');
            $table->string('workCountry1');
            $table->string('mode1');
            $table->longText('workInfo1')->nullable();

            $table->string('position2')->nullable();
            $table->string('company2')->nullable();
            $table->date('workDateFrom2')->nullable();
            $table->date('workDateTo2')->nullable();
            $table->string('workCity2')->nullable();
            $table->string('workCountry2')->nullable();
            $table->string('mode2')->nullable();
            $table->longText('workInfo2')->nullable();

            $table->string('position3')->nullable();
            $table->string('company3')->nullable();
            $table->date('workDateFrom3')->nullable();
            $table->date('workDateTo3')->nullable();
            $table->string('workCity3')->nullable();
            $table->string('workCountry3')->nullable();
            $table->string('mode3')->nullable();
            $table->longText('workInfo3')->nullable();
            
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
        Schema::dropIfExists('resumes');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'name',
            'title',
            'photo',
            'pitch' ,
            'email' ,
            'phone' ,
            'address' ,
            'city' ,
            'country' ,
            'url' ,
            'email' ,
            'lan1' ,
            'lancat1' ,
            'lan2' ,
            'lancat2' ,
            'lan3' ,
            'lancat3' ,
            'sskill1' ,
            'sskill2' ,
            'sskill3' ,
            'sskill4' ,
            'sskill5' ,
            'tskill1' ,
            'tskill2' ,
            'tskill3' ,
            'tskill4' ,
            'tskill5' ,
            'tskill6' ,
            'tskill7' ,
            'tskill8' ,
            'tskill9' ,
            'tskill10' ,
            "program1" ,
            "school1" ,
            "programDateFrom1" ,
            "programDateTo1" ,
            "insCity1" ,
            "insCountry1" ,
            "info1" ,
            "program2" ,
            "school2" ,
            "programDateFrom2" ,
            "programDateTo2" ,
            "insCity2" ,
            "insCountry2" ,
            "info2" ,
            "program3" ,
            "school3" ,
            "programDateFrom3" ,
            "programDateTo3" ,
            "insCity3" ,
            "insCountry3" ,
            "info3" ,
            "position1" ,
            "company1" ,
            "workDateFrom1" ,
            "workDateTo1" ,
            "workCity1" ,
            "workCountry1" ,
            "mode1" ,
            "workInfo1" ,
            "position2" ,
            "company2" ,
            "workDateFrom2" ,
            "workDateTo2" ,
            "workCity2" ,
            "workCountry2" ,
            "mode2" ,
            "workInfo2" ,
            "position3" ,
            "company3" ,
            "workDateFrom3" ,
            "workDateTo3" ,
            "workCity3" ,
            "workCountry3" ,
            "mode3" ,
            "workInfo3",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    public function user()

    {

        return $this->belongsTo(User::class);

    }
}

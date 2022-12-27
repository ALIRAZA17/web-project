<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobResponse extends Model
{
    protected $table = "job_responses";
    protected $primaryKey = "id";
    
    use HasFactory;

    protected $fillable = [
            'job_id',
            'user_id',
            'name' ,
            'phone' ,
            'address' ,
            'city' ,
            'country' ,
            'resume' ,
            'letter' ,
    ];


    public function user()

    {

        return $this->belongsTo(User::class);

    }
}


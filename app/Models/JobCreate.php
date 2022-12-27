<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCreate extends Model
{
    protected $table = "jobs";
    protected $primaryKey = "id";
    
    
    use HasFactory;


    protected $fillable = [
        
            'user_id',
            'name' ,
            'title' ,
            'location' ,
            'mode' ,
            'category' ,
            'deadline' ,
            'url' ,
            'tags',
            'logo',
            'desc',

    ];

    public function user()

    {

        return $this->belongsTo(User::class);

    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJob extends Model
{
    protected $table = "saved_jobs";
    protected $primaryKey = "id";
    use HasFactory;
}
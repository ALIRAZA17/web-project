<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    protected $table = "applied_jobs";
    protected $primaryKey = "id";
    use HasFactory;
}
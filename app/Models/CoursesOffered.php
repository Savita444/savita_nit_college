<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesOffered extends Model
{
    use HasFactory;
    protected $table = 'tbl_courese_offered';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
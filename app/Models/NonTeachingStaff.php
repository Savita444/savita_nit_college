<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonTeachingStaff extends Model
{
    use HasFactory;
    protected $table = 'tbl_staff';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
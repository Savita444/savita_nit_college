<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicCalendar extends Model
{
    use HasFactory;
    protected $table = 'academic_calendar';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
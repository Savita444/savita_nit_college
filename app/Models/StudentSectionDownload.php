<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSectionDownload extends Model
{
    use HasFactory;
    protected $table = 'student_download';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
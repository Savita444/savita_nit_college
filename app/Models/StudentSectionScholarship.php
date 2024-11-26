<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSectionScholarship extends Model
{
    use HasFactory;
    protected $table = 'scholarship';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
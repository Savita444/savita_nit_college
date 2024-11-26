<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertLecture extends Model
{
    use HasFactory;
    protected $table = 'expert_lecture';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
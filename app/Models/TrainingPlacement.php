<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingPlacement extends Model
{
    use HasFactory;
    protected $table = 'trainingplacement';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
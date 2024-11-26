<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustrialVisitMentor extends Model
{
    use HasFactory;
    protected $table = 'industrial_visit';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
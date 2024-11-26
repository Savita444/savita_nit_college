<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitiesCategory extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
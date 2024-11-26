<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $table = 'tbl_achievement';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
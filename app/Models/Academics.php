<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academics extends Model
{
    use HasFactory;
    protected $table = 'academics';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
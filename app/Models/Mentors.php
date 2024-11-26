<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentors extends Model
{
    use HasFactory;
    protected $table = 'tbl_mentors';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
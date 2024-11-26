<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AICTE extends Model
{
    use HasFactory;
    protected $table = 'aicte';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
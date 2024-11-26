<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSBTE extends Model
{
    use HasFactory;
    protected $table = 'msbte';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
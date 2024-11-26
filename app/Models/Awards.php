<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    use HasFactory;
    protected $table = 'tbl_awards';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
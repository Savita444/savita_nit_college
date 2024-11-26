<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntiRagging extends Model
{
    use HasFactory;
    protected $table = 'tbl_antiragging_members';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
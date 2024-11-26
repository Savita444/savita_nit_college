<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitiesInformation extends Model
{
    use HasFactory;
    protected $table = 'tbl_activity';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
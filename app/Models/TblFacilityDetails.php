<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblFacilityDetails extends Model
{
    use HasFactory;
    protected $table = 'tbl_facility';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
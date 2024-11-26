<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalComplaint extends Model
{
    use HasFactory;
    protected $table = 'tbl_complaint_members';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
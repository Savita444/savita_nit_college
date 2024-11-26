<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentInformation extends Model
{
    use HasFactory;
    protected $table = 'tbl_department';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
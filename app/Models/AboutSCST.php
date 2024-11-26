<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSCST extends Model
{
    use HasFactory;
    protected $table = 'tbl_scst_members';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
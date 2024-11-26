<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = 'tbl_enquiry_new';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
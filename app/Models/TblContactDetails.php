<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblContactDetails extends Model
{
    use HasFactory;
    protected $table = 'tbl_contact';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryStaff extends Model
{
    use HasFactory;
    protected $table = 'library_staff';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
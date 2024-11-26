<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalsMagazines extends Model
{
    
    use HasFactory;
    protected $table = 'journals_magazines';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RulesRegulations extends Model
{
    use HasFactory;
    protected $table = 'library_rules_regulations';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
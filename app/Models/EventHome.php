<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventHome extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
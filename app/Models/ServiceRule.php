<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRule extends Model
{
    use HasFactory;
    protected $table = 'service_rule';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
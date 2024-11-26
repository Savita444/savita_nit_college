<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CAPAdmissionProcedureSteps extends Model
{
    use HasFactory;
    protected $table = 'cap';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
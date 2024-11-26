<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MandatoryDisclosure extends Model
{
    use HasFactory;
    protected $table = 'mandatory_disclosure';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
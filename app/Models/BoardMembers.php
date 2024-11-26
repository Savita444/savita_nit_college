<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardMembers extends Model
{
    use HasFactory;
    protected $table = 'tbl_board_members';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
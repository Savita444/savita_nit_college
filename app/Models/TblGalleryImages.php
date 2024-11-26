<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblGalleryImages extends Model
{
    use HasFactory;
    protected $table = 'tbl_gallery_images';
    protected $primaryKey = 'id';
    protected $fillable=[];
}
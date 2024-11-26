<?php
namespace App\Http\Repository\Website\Gallery;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
    TblGalleryImages,
    TblGalleryImagesTitle
    
};

class GalleryRepository  {

    // public function getGallery(){
    //     try {

    //         $data_output = TblGalleryImages::leftJoin('tbl_gallery_image_title', 'tbl_gallery_images.fld_image_title_id', '=', 'tbl_gallery_image_title.fld_image_title_id')
	// 	->where('tbl_gallery_images.fld_delete', '0')
	// 	->where('tbl_gallery_image_title.fld_delete', '0')
    //       ->select(
	// 		'tbl_gallery_image_title.*',
	// 		'tbl_gallery_images.*'
    //       )
	// 	->orderBy('tbl_gallery_images.fld_gallery_id', 'desc')
    //     ->get()
    //     ->toArray();

    //                   return $data_output;
    //     } catch (\Exception $e) {
    //         return $e;
    //     }
    // }

    // REPOSITORY
public function getGallery()
{
    try {
        $data_output = TblGalleryImages::leftJoin('tbl_gallery_image_title', 'tbl_gallery_images.fld_image_title_id', '=', 'tbl_gallery_image_title.fld_image_title_id')
            ->where('tbl_gallery_images.fld_delete', '0')
            ->where('tbl_gallery_image_title.fld_delete', '0')
            ->select(
                'tbl_gallery_image_title.*',
                'tbl_gallery_images.*'
            )
            ->orderBy('tbl_gallery_images.fld_gallery_id', 'desc')
            ->get()
            ->toArray();  // Convert the collection to an array of associative arrays

        return $data_output;
    } catch (\Exception $e) {
        throw $e; // Throw the exception so it can be caught and handled elsewhere if needed
    }
}


}    
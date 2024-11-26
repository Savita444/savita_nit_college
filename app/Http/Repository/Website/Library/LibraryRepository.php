<?php
namespace App\Http\Repository\Website\Library;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    LibraryStaff,
    BookSection,
    JournalsMagazines,
    RulesRegulations,
    
};

class LibraryRepository  {

    public function getLibraryStaff(){
        try {

            $data_output = LibraryStaff::where('staff_delete', '0')
            ->where('is_active', '1')
            ->orderBy('library_staff_id', 'desc')
            ->get();

                   
           return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getBooks(){
        try {

            $data_output = BookSection::where('books_section_delete', '0')
            ->where('is_active', '1')
            ->orderBy('books_section_id', 'desc')
            ->get();

                   
           return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getJournalsMagzines(){
        try {

            $data_output = JournalsMagazines::where('fld_delete', '0')
            ->where('is_active', '1')
            ->orderBy('journals_magazines_id', 'desc')
            ->get();

                   
           return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getRulesRequlations(){
        try {

            $data_output = RulesRegulations::where('fld_delete', '0')
            ->where('is_active', '1')
            ->orderBy('rules_regulations_id', 'desc')
            ->get();

                   
           return $data_output;
        } catch (\Exception $e) {
            return $e;
        }
    }
   
    
    
    
    
}    
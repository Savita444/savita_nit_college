<?php
namespace App\Http\Services\Website\Library;

use App\Http\Repository\Website\Library\LibraryRepository;

// use App\Marquee;
use Carbon\Carbon;


class LibraryServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new LibraryRepository();
    }


    public function getLibraryStaff()
    {
        try {
            $dataOutputCategory = $this->repo->getLibraryStaff();
            return $dataOutputCategory; 
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getBooks()
    {
        try {
            $dataOutputCategory = $this->repo->getBooks();
            return $dataOutputCategory; 
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getJournalsMagzines()
    {
        try {
            $dataOutputCategory = $this->repo->getJournalsMagzines();
            return $dataOutputCategory; 
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function getRulesRequlations()
    {
        try {
            $dataOutputCategory = $this->repo->getRulesRequlations();
            return $dataOutputCategory; 
        } catch (\Exception $e) {
            return $e;
        }
    }
    

}
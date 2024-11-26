<?php
namespace App\Http\Repository\Website\AboutUs;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\ {
    Designation,
    BoardMembers
    
};

class AboutUsRepository  {

//     public function getPolytechnicAboutGoverningbody()
// {
//     try {
//         $data_output = BoardMembers::join('department', 'department.id', '=', 'tbl_board_members.Designation_id')
//             ->select(
//                 'tbl_board_members.fld_bm_id',
//                 'department.id as Department_id',
//                 'tbl_board_members.fld_bm_name', 
//                 'tbl_board_members.gov_address', 
//                 'department.Department',
//                 'tbl_board_members.is_active'
//             )
//             // ->where('tbl_board_members.is_active', 1) // Filter by active records
//             ->orderBy('tbl_board_members.fld_bm_id', 'desc')
//             ->get(); // Retrieve all matching records

//         return $data_output;
//     } catch (\Exception $e) {
//         return $e;
//     }
// }
public function getPolytechnicAboutGoverningbody()
{
    try {
        $data_output = BoardMembers::join('designation', 'designation.Designation_id', '=', 'tbl_board_members.Designation_id')
            ->select(
                'tbl_board_members.fld_bm_id',
                'designation.Designation_id as Designation_id',
                'tbl_board_members.fld_bm_name', 
                'tbl_board_members.gov_address', 
                'tbl_board_members.education', 
                'designation.Designation',
                'tbl_board_members.is_active'
            )
            ->where('tbl_board_members.is_active', 1)
            ->where('tbl_board_members.fld_delete', 0)
            ->orderBy('tbl_board_members.fld_bm_id', 'asc')
            ->get(); // Retrieve all matching records

        return $data_output;
    } catch (\Exception $e) {
        return $e;
    }
}

}    
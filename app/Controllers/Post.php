<?php

namespace App\Controllers;

class Post extends BaseController
{
    public function ShowPost($Param): string
    {
        $db = \Config\Database::connect();
        $builder = $db->table('jobposts');
        $builder->where('JobPostCode', $Param);
        $query = $builder->get();
        $row = $query->getRow();
        $companyQuery = $db->table('companydetails')->where('Id', $row->CompanyId)->get();
        $companyRow = $companyQuery->getRow();
        $row->CompanyName = $companyRow->CompanyName;
        $row->CompanyLogo = $companyRow->CompanyLogoLocation;

        return view('JobPost', ['row' => $row]);
        //return view('JobPost');
    }

}

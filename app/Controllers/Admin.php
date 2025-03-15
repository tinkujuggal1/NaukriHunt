<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function Admin(): string
    {
        return view('Admin');
    }

    public function AdminJobPostCreate(): string
    {
        return view('AdminJobPostCreate');
    }
    public function AdminJobPostCreateSubmit(): string
    {
        // $dom = new \DOMDocument();
        // $dom->loadHtml($this->request->getPost('content'));
        // $div = $dom->getElementById('ContentOutput');
        // $content = $div->nodeValue;
        $JobDescription = $this->request->getPost('content');
        $jobtitle = $this->request->getPost('jobtitle');
        $JobLocation = $this->request->getPost('JobLocation');
        $CompanyId = $this->request->getPost('CompanyId');
        $ExpiredDate = $this->request->getPost('ExpiredDate');

        $db = \Config\Database::connect();
        $builder = $db->table('jobposts');
        $data = [
        'JobPostCode' => str_replace(' ', '',$jobtitle),
        'JobTitle' => $jobtitle,
        'JobDescription' => $JobDescription,
        'JobLocation' => $JobLocation,
        'CompanyId' => $CompanyId,
        'ExpiredDate' => $ExpiredDate,
        'CreatedDateTime'=>date('Y-m-d H:i:s'),
        'IsActive'=>1
        ];
        $builder->insert($data);

        echo $JobDescription;
        return view('AdminJobPostCreate');
    }

    

}

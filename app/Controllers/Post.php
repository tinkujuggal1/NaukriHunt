<?php

namespace App\Controllers;

class Post extends BaseController
{
    public function ShowPost($Param): string
    {
        return view('JobPost');
    }

}

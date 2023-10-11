<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportController extends BaseController
{
    public function index()
    {
        //
    }

    public function repair_request()
    {
        $data = [
            'title' => 'Report',
            'content' => 'report'
        ];
        return view('report/repair_request', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\PengirimanModel;
use App\Models\CustomerModel;
use App\Models\DestinasiModel;
class Report extends BaseController
{
    public function index(): string
    {
        $pengirimanModel = new PengirimanModel();
        $data['destinations'] = $pengirimanModel->countDestinations();
        return view('report/index', $data);
    }
}

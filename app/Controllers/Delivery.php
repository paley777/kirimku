<?php

namespace App\Controllers;

use App\Models\PengirimanModel;
use App\Models\CustomerModel;
use App\Models\DestinasiModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Delivery extends BaseController
{
    public function index()
    {
        $delivery = new PengirimanModel();
        $data['deliveries'] = $delivery->findAll();
        echo view('delivery/index', $data);
    }
    public function detail($id)
    {
        $delivery = new PengirimanModel();
        $customer = new CustomerModel();
        $destinasi = new DestinasiModel();
        $data['customers'] = $customer->findAll();
        $data['destinasis'] = $destinasi->findAll();
        $data['delivery'] = $delivery->where('id', $id)->first();

        if (!$data['delivery']) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('delivery/detail', $data);
    }
    public function create()
    {
        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'tanggal' => 'required',
            'customer_id' => 'required',
            'destinasi_id' => 'required',
            'biaya_pengiriman' => 'required',
            'tanggal_sampai' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $delivery = new PengirimanModel();
            $delivery->insert([
                'tanggal' => $this->request->getPost('tanggal'),
                'customer_id' => $this->request->getPost('customer_id'),
                'destinasi_id' => $this->request->getPost('destinasi_id'),
                'biaya_pengiriman' => $this->request->getPost('biaya_pengiriman'),
                'tanggal_sampai' => $this->request->getPost('tanggal_sampai'),
            ]);
            return redirect('delivery');
        }

        // tampilkan form create
        $customer = new CustomerModel();
        $destinasi = new DestinasiModel();
        $data['customers'] = $customer->findAll();
        $data['destinasis'] = $destinasi->findAll();
        echo view('delivery/create', $data);
    }
}

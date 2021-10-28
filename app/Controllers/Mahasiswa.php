<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Rest;

class Mahasiswa extends ResourceController
{
    protected $rest;
    protected $session;
    public function __construct() {
        $this->rest = new Rest();
        $this->session = session();
    }
    public function index()
    {
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "nama_status_mahasiswa = 'Aktif'", '');
        $result['mahasiswa'] = $item->data;
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = view("mahasiswa", $result);
        return view('layout/layout', $data);
    }
}

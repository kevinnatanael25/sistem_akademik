<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Biodata extends ResourceController
{
    protected $session;
    protected $rest;

    public function __construct()
    {
        $this->session = session();
        $this->rest = new Rest();
    }
    public function index()
    {

        $token = $this->session->get('token');
    }
    public function read()
    {
        $id_mahasiswa = $this->request->getGet('id_mahasiswa');
        // $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "id_mahasiswa=".'$id_mahasiswa', '');

        return $this->respond($id_mahasiswa);
    }
}

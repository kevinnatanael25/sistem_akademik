<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Biodata extends ResourceController
{

    protected $rest;

    public function __construct()
    {
        $this->session = session();
        $this->rest = new Rest();
    }
  
    public function read()
    {
        $filter = $this->request->getGet() ? $this->request->getGet('param')."=".$this->request->getGet('value') : "";
        $item = $this->rest->callRest("GetDataLengkapMahasiswaProdi", $this->session->get('token'), $filter, '');
        //$item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "id_periode <='$tahun' AND nama_status_mahasiswa = 'Aktif'", '');
        //$item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), '','', '');
        return $this->respond($item);
    }
}

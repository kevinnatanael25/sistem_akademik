<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class MahasiswaLab extends ResourceController
{
    protected $modelName="App\Models\BiodataMahasiswaModel";
    protected $format = "json";
    protected $session;
    protected $rest;

    public function __construct()
    {
        $this->session = session();
        $this->rest = new Rest();
    }
  
    public function read()
    {
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "nama_status_mahasiswa='Aktif'",'');
        return $this->respond($item);
    }
    public function add()
    {
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "nama_status_mahasiswa = 'Aktif'", '');

        $result = $this->model->insertBatch($item->data);
        return $this->respond($result);
    }
}

<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class MahasiswaSkripsi extends ResourceController
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
        $tahun = date('Y');
        $tahun -=3; 
        $tahun = $tahun.'1';
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "id_periode <='$tahun' AND nama_status_mahasiswa = 'Aktif'", '');
       return $this->respond($item);
    }
    public function add()
    {
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "nama_status_mahasiswa = 'Aktif'", '');
        $result = $this->model->insertBatch($item->data);
        return $this->respond($result);
    }
}

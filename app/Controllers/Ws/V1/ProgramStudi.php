<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class ProgramStudi extends ResourceController
{
    protected $modelName="App\Models\ProdiModel";
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
        $item = $this->rest->callRest("GetAllProdi", $this->session->get('token'), "id_perguruan_tinggi='14a2759a-ce83-48eb-85c9-db4f8de00f20' AND status='A'",'');
        return $this->respond($item);
    }
    public function add()
    {
        
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "nama_status_mahasiswa = 'Aktif'", '');

        $result = $this->model->insertBatch($item->data);
        return $this->respond($result);
    }
}

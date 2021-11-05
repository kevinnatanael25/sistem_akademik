<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Mahasiswa extends ResourceController
{
    protected $session;
    protected $rest;

    public function __construct()
    {
        $this->session = session();
        $this->rest = new Rest();
    }
  
    public function read()
    {
        $id = $this->request->getGet('id_mahasiswa');
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), $this->request->getGet('param').'='.$this->request->getGet('value'), '');
        //$item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "id_periode <='$tahun' AND nama_status_mahasiswa = 'Aktif'", '');
        //$item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), '','', '');
        return $this->respond($id);
    }
}
// public function read()
//     {
//         $tahun = date('Y');
//         $tahun -=3; 
//         $tahun = $tahun.'1';
//         $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "id_periode <='$tahun' AND nama_status_mahasiswa = 'Aktif'", '');

//         return $this->respond($item);
//     }




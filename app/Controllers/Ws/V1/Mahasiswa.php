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
        //$item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), $this->request->getGet('param').'='.$this->request->getGet('value'), '');
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), '','', '');
        return $this->respond($item);
    }
}

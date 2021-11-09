<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Prodi extends ResourceController
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
        $data = $this->model->findAll();
        return $this->respond($data);
    }
}

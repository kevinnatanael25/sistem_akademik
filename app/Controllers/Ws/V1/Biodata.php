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
        $data = $this->rest->callRest("GetNegara", $this->session->get('token'), '', '');
        return $this->respond($data);
    }
}

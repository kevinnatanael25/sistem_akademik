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
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), '', '');
        $result['biodata'] = $item->data;
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = view("biodata", $result);
        return view('layout/layout', $data);
    }
}

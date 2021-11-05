<?php

namespace App\Controllers;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{

    protected $rest;
    protected $session;
    public function __construct() {
        $this->rest = new Rest();
        $this->session = session();
    }
    public function index()
    {
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), '', '');
        $result['biodata'] = $item->data;
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = view("home");
        return view('home');
        // return view('layout/layout', $data);
        // return view("layout/layout1");
    }
}

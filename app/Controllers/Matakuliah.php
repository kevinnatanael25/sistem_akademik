<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Rest;

class Matakuliah extends ResourceController
{
    protected $rest;
    protected $session;
    public function __construct() {
        $this->rest = new Rest();
        $this->session = session();
    }
    public function index()
    {
        $item = $this->rest->callRest("GetListMataKuliah", $this->session->get('token'), "", '');
        $result['matakuliah'] = $item->data;
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = view("matakuliah", $result);
        return view('layout/sidebar', $data);
    }
}

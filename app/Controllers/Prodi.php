<?php

namespace App\Controllers;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class Prodi extends ResourceController
{
    protected $modelName = "App\Models\ProdiModel";
    protected $format = "json";
    protected $rest;
    protected $session;
    public function __construct()
    {
        $this->rest = new Rest();
        $this->session = session();
    }
    public function index()
    {
        $data['sidebar'] = view("layout/sidebar");
        $data['content'] = view("program_studi");
        return view('layout/layout', $data);
    }
    public function read()
    {
        $data = $this->model->findAll();
        return $this->respond($data);
    }
    public function post()
    {
        $prodis = $this->rest->callRest("GetAllProdi", $this->session->get('token'), "id_perguruan_tinggi='14a2759a-ce83-48eb-85c9-db4f8de00f20' AND status='A'", '');
        foreach ($prodis->data as $key => $value) {
            $value->perguruan_tinggi_id = "1";
            $result = $this->model->insert($value);
        }
    }
    public function put($id = null)
    {
        $data = $this->request->getJSON();
        $result = $this->model->update($id, $data);
        return $this->respond($result);
    }
    public function delete($id = null)
    {
        $result = $this->model->delete($id);
        return $this->respond($result);
    }
}
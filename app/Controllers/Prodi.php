<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Rest;

class Prodi extends ResourceController
{
    protected $modelName = "App\Models\ProdiModel";
    protected $format = "json";
    protected $rest;
    protected $session;
    public function __construct() {
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
        $data = $this->request->getJSON();
        $this->model->insert($data);
        $data->id= $this->model->getInsertID();
        return $this->respond($data);
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


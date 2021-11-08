<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Rest;

class PerguruanTinggi extends ResourceController
{
    protected $modelName = "App\Models\PerguruanTinggiModel";
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
        $data['content'] = view("perguruantinggi");
        return view('layout/layout', $data);
    }
    public function read()
    {
        $data = $this->model->findAll();
        return $this->respond($data);
    }
    public function post()
    {
        try {
            $data = $this->request->getJSON();
            // $pt = $rest->callRest('GetProfilPT',$this->session->get('token'), '', '');
            // $data->
            $this->model->insert($data);
            $data->id= $this->model->getInsertID();
            return $this->respond($data);
        } catch (\Throwable $th) {
            return $this->respond($th->getMessage());
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

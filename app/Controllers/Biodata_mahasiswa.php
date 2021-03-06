<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Rest;

class Biodata_mahasiswa extends ResourceController
{
    protected $modelName = "App\Models\BiodataMahasiswaModel";
    protected $format = "json";
    protected $rest;
    protected $session;
    public function __construct() {
        $this->rest = new Rest();
        $this->session = session();
    }
    public function index()
    {
        
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

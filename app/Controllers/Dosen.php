<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\Rest;

class Dosen extends ResourceController
{
    protected $modelName = "App\Models\DosenModel";
    protected $format = "json";
    protected $rest;
    protected $session;
    protected $encrypter;
    protected $user;
    protected $userrole;
    protected $dosen;    
    protected $prodi;

    public function __construct() {
        $this->rest = new Rest();
        $this->session = session();        
        $this->encrypter = \Config\Services::encrypter();
        $this->user = new \App\Models\UserModel();
        $this->userrole = new \App\Models\UserRoleModel();
        $this->biodata = new \App\Models\DosenModel();        
        $this->prodi = new \App\Models\ProdiModel();
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
    public function add()
    {
        $dosen = $this->rest->callRest("GetListPenugasanDosen", $this->session->get('token'), '', '');
        // $item = $this->biodata->get()->getResultObject();
        $prodis = $this->prodi->get()->getResultObject();
        // $result = [];
        // foreach ($dosen->data as $key => $ma) {
        //     foreach ($item as $key => $value) {
        //         foreach ($prodis as $key => $prodi) {
        //             if ($ma->id_dosen == $value->id_dosen && $prodi->id_prodi==$ma->id_prodi) {
        //                 $ma->id_dosen = $value->id;
        //                 $ma->program_studi_id = $prodi->id;
        //                 array_push($result, $ma);
        //             }
        //         }
        //     }
        // }
        // $this->model->insertBatch($result);

        return $this->respond($this->model->insertBatch($prodis));
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

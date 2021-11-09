<?php

namespace App\Controllers;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

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

    public function __construct()
    {
        $this->rest = new Rest();
        $this->session = session();
        $this->encrypter = \Config\Services::encrypter();
        $this->user = new \App\Models\UserModel();
        $this->userrole = new \App\Models\UserRoleModel();
        $this->dosen = new \App\Models\DosenModel();
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
            $data->id = $this->model->getInsertID();
            return $this->respond($data);
        } catch (\Throwable$th) {
            return $this->respond($th->getMessage());
        }
    }
    public function sync()
    {
        $dosens = $this->rest->callRest("GetListPenugasanDosen", $this->session->get('token'), "id_prodi IN ('22f051b3-30b4-403a-a14a-765f3608ed55', 'dd8677e5-5bc1-4f37-a270-f1d005b3037c')", '');
        $newDosen = [];
        foreach ($dosens->data as $dosen) {
            $newDosen[$dosen->nidn][] = $dosen;
        }
        
        try {
            foreach ($newDosen as $dosen) {
                $user = [
                    'username' => $dosen[0]->nidn,
                    'password' => md5("stimik1011"),
                    'email' => $dosen[0]->nidn . "@stimiksepnop.ac.id",
                ];
                $this->user->insert($user);
                $dosen[0]->user_id = $this->user->getInsertID();
                $this->dosen->insert($dosen[0]);
            }
           
        } catch (\Throwable $th) {
            $this->fail($th->getMessage);
        }
        // $item = $this->biodata->get()->getResultObject();
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
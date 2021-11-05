<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class MahasiswaSkripsi extends ResourceController
{
    protected $modelName = "App\Models\MahasiswaModel";
    protected $format = "json";
    protected $session;
    protected $rest;
    protected $encrypter;
    protected $user;
    protected $userrole;
    protected $biodata;
    protected $prodi;

    public function __construct()
    {
        $this->session = session();
        $this->rest = new Rest();
        $this->encrypter = \Config\Services::encrypter();
        $this->user = new \App\Models\UserModel();
        $this->userrole = new \App\Models\UserRoleModel();
        $this->biodata = new \App\Models\BiodataMahasiswaModel();
        $this->prodi = new \App\Models\ProdiModel();
    }

    public function read()
    {
        $tahun = date('Y');
        $tahun -= 3;
        $tahun = $tahun . '1';
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "id_periode <='$tahun' AND nama_status_mahasiswa = 'Aktif'", '');
        return $this->respond($item);
    }
    public function add()
    {
        $mahasiswa = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "nama_status_mahasiswa = 'Aktif'", '');
        $item = $this->biodata->get()->getResultObject();
        $prodis = $this->prodi->get()->getResultObject();
        $result = [];
        foreach ($mahasiswa->data as $key => $ma) {
            foreach ($item as $key => $value) {
                foreach ($prodis as $key => $prodi) {
                    if ($ma->id_mahasiswa == $value->id_mahasiswa && $prodi->id_prodi==$ma->id_prodi) {
                        $ma->biodata_mahasiswa_id = $value->id;
                        $ma->program_studi_id = $prodi->id;
                        array_push($result, $ma);
                    }
                }
            }
        }
        // $this->model->insertBatch($result);

        return $this->respond($this->model->insertBatch($result));
    }

    public function pass()
    {
        $data = $this->user->get()->getResultArray();
        foreach ($data as $key => $value) {
            $set = [
                'password' => md5("stimik1011"),
            ];
            $this->user->update($value['id'], $set);
        }
        return $this->respond($data);
    }
}
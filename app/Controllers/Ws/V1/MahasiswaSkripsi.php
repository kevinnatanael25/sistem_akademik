<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class MahasiswaSkripsi extends ResourceController
{
    protected $modelName = "App\Models\BiodataMahasiswaModel";
    protected $format = "json";
    protected $session;
    protected $rest;
    protected $encrypter;
    protected $user;
    protected $userrole;

    public function __construct()
    {
        $this->session = session();
        $this->rest = new Rest();
        $this->encrypter = \Config\Services::encrypter();
        $this->user = new \App\Models\UserModel();
        $this->userrole = new \App\Models\UserRoleModel();
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
        $item = $this->rest->callRest("GetBiodataMahasiswa", $this->session->get('token'), "", '');
        $result = [];
        foreach ($mahasiswa->data as $key => $ma) {
            foreach ($item->data as $key => $value) {
                if ($ma->id_mahasiswa == $value->id_mahasiswa) {
                    $user = [
                        'username' => $ma->nim,
                        'password' => base64_encode($this->encrypter->encrypt("stimik1011")),
                        'email' => $value->email == null ? $ma->nim . "@stimiksepnop.ac.id" : $ma->nim,
                    ];
                    $this->user->insert($user);
                    $user['id'] = $this->user->getInsertID();
                    $role = [
                        'user_id' => $user['id'],
                        'role_id' => 2,
                    ];
                    $this->userrole->insert($role);
                    $value->users_id = $user['id'];

                    $this->model->insert($value);
                    array_push($result, $value);
                }
            }
        }
        return $this->respond($result);
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
<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \Firebase\JWT\JWT;

class Users extends ResourceController
{

    protected $modelName = "App\Models\UserModel";
    protected $format = "json";

    public function index()
    {
        
    }

    public function registrasi()
    {
        $data = $this->request->getJSON();
        $data->password = password_hash($data->password, PASSWORD_DEFAULT);
        if($this->model->insert($data)){
            $message = [
                'message'=>"Registrasi Berhasil",
                'status'=>true
            ];
            return $this->respondCreated($message);
        }else{
            $message = [
                'message'=>"Registrasi gagal",
                'status'=>false
            ];
            return $this->fail($message);
        }
        
    }

    public function login()
    {
        
    }

    public function detail()
    {
        
    }
}

<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use \Firebase\JWT\JWT;
use PhpParser\Builder\Function_;

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
    public function read(){
        $data = $this->model->findAll();
        return $this->respond($data);
    }
    
    // $session = session();
    //     $model = new UserModel();

    public function keys()
    {
        return md5("stmik1011");
    }
    public function login()
    {
        $data = $this->request->getJSON();
        $userdata = $this->model->where('username', $data->username)->first();

        if (!empty($userdata)) {

            if (password_verify($this->request->getVar("password"), $userdata['password'])) {

                $key = $this->keys();

                $iat = time(); // current timestamp value
                $nbf = $iat + 10;
                $exp = $iat + 3600;

                $payload = array(
                    "iss" => base_url(),
                    "aud" => base_url(),
                    "iat" => $iat, // issued at
                    "nbf" => $nbf, //not before in seconds
                    "exp" => $exp, // expire time in seconds
                    "data" => $userdata,
                );

                $token = JWT::encode($payload, $key);

                $response = [
                    'status' => 200,
                    'error' => false,
                    'messages' => 'User logged In successfully',
                    'data' => [
                        'token' => $token,
                    ],
                ];
                return $this->respondCreated($response);
            } else {

                $response = [
                    'status' => 500,
                    'error' => true,
                    'messages' => 'Incorrect details',
                    'data' => [],
                ];
                return $this->respondCreated($response);
            }
        } else {
            $response = [
                'status' => 500,
                'error' => true,
                'messages' => 'User not found',
                'data' => [],
            ];
            return $this->respondCreated($response);
        }
    }

    public function detail()
    {
        
    }
}

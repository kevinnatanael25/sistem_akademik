<?php

namespace App\Controllers\Ws\V1;

use CodeIgniter\RESTful\ResourceController;
use Exception;
use \Firebase\JWT\JWT;

class Auth extends ResourceController
{
    protected $modelName = "App\Models\UserModel";
    protected $format = "json";

    public function index()
    {
        $this->model->check();
        return view("login");
    }

    public function register()
    {
        $data = $this->request->getJSON();
        $data->password = password_hash($data->password, PASSWORD_DEFAULT);

        if ($this->model->insert($data)) {
            $response = [
                'status' => 200,
                "error" => false,
                'messages' => 'Successfully, user has been registered',
                'data' => [],
            ];
        } else {

            $response = [
                'status' => 500,
                "error" => true,
                'messages' => 'Failed to create user',
                'data' => [],
            ];
        }

        return $this->respondCreated($response);
    }

    public function login()
    {

        $session = session();
        $data = (array) $this->request->getPost();
        $result = $this->model->login($data);
        if ($result) {
            $data = $this->request->getJSON();
            $userdata = $this->model->where('username', $data->username)->first();

            if (!empty($userdata)) {

                if (password_verify($this->request->getVar("password"), $userdata['password'])) {

                    $key = $this->getKey();

                    $iat = time(); // current timestamp value
                    $nbf = $iat + 10;
                    $exp = $iat + 3600;

                    $payload = array(
                        "iss" => "The_claim",
                        "aud" => "The_Aud",
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

    public function details()
    {
        $key = keyJWT;
        $authHeader = $this->request->getHeader("Authorization");
        $authHeader = $authHeader->getValue();
        $token = $authHeader;

        try {
            $decoded = JWT::decode($token, $key, array("HS256"));

            if ($decoded) {

                $response = [
                    'status' => 200,
                    'error' => false,
                    'messages' => 'User details',
                    'data' => [
                        'profile' => $decoded,
                    ],
                ];
                return $this->respondCreated($response);
            }
        } catch (Exception $ex) {

            $response = [
                'status' => 401,
                'error' => true,
                'messages' => 'Access denied',
                'data' => [],
            ];
            return $this->respondCreated($response);
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}

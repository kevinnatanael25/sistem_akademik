<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id', 'username', 'password', 'email'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    protected $encrypter;
    protected $db;

    public function __construct()
    {
        $this->encrypter = \Config\Services::encrypter();
        $this->db = \Config\Database::connect();
    }

    public function check()
    {
        if ($this->db->table('users')->countAllResults(false) == 0) {
            $this->db->transBegin();
            $user = [
                "username" => "Administrator",
                "password" => base64_encode($this->encrypter->encrypt("Admin")),
            ];
            $this->db->table('users')->insert($user);
            $userid = $this->db->insertID();
            $role = [
                "role" => "Admin",
            ];
            $this->db->table('role')->insert($role);
            $roleid = $this->db->insertID();
            $roleuser = [
                'users_id' => $userid,
                'role_id' => $roleid,
            ];
            $this->db->table('user_role')->insert($roleuser);
            $role = [
                "role" => "Konsumen",
            ];
            $this->db->table('role')->insert($role);
            if ($this->db->transStatus() === false) {
                $this->db->transRollback();
                return true;
            } else {
                $this->db->transCommit();
                return false;
            }
        }
    }

    public function login($data)
    {
        $username = $data['username'];
        $result = $this->db->query("SELECT
            `user`.`id`,
            `user`.`username`,
            `user`.`password`,
            `role`.`role`
        FROM
            `user`
            LEFT JOIN `user_role` ON `user_role`.`user_id` = `user`.`id`
            LEFT JOIN `role` ON `role`.`id` = `user_role`.`role_id` WHERE username='$username'")->getRowArray();
        if ($result) {
            if ($result['password'] == md5($data['password'])) {
                if ($result['role'] == 'Mahasiswa') {
                    $item = $this->db->query("SELECT
                    `user`.`username`,
                    `user`.`password`,
                    `user`.`email`,
                    `user_role`.`role_id`,
                    `role`.`role`,
                    `biodata_mahasiswa`.*
                    FROM
                    `user`
                    LEFT JOIN `user_role` ON `user`.`id` = `user_role`.`user_id`
                    LEFT JOIN `role` ON `user_role`.`role_id` = `role`.`id`
                    LEFT JOIN `biodata_mahasiswa` ON `biodata_mahasiswa`.`users_id` = `user`.`id` WHERE username='$username'")->getRowArray();
                    return $item;
                } else {
                    $result['nama'] = "Administrator";
                    return $result;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
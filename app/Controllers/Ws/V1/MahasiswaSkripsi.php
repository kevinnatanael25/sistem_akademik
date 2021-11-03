<?php

namespace App\Controllers\Ws\V1;

use App\Libraries\Rest;
use CodeIgniter\RESTful\ResourceController;

class MahasiswaSkripsi extends ResourceController
{
    protected $modelName="App\Models\BiodataMahasiswaModel";
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
        $tahun -=3; 
        $tahun = $tahun.'1';
        $item = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'), "id_periode <='$tahun' AND nama_status_mahasiswa = 'Aktif'", '');
       return $this->respond($item);
    }
    public function add()
    {
        $mahasiswa = $this->rest->callRest("GetListMahasiswa", $this->session->get('token'),"nama_status_mahasiswa = 'Aktif'", '');
        $item = $this->rest->callRest("GetBiodataMahasiswa", $this->session->get('token'),"", '');
        $result = [];
        foreach ($mahasiswa->data as $key => $ma) {
            foreach ($item->data as $key => $value) {
                if($ma->id_mahasiswa==$value->id_mahasiswa){
                    $user = [
                        'username'=> $ma->nim,
                        'password'=> base64_encode($this->encrypter->encrypt("stimik1011")),
                        'email'=>$value->email == null ? $ma->nim."@stimiksepnop.ac.id" : $ma->nim
                    ];
                    $this->user->insert($user);
                    $user['id']= $this->user->getInsertID();
                    $role = [
                        'user_id'=>$user['id'],
                        'role_id'=>2
                    ];
                    $this->userrole->insert($role);
                    $value->users_id = $user['id'];

                    // $set = (array) $value;
                    
                    // $mhs = [
                    //     "users_id"=>$user['id'],
                    //     "nama_mahasiswa"=>$set["nama_mahasiswa"],
                    //     "jenis_kelamin"=>$set["jenis_kelamin"],
                    //     "tempat_lahir"=>$set["tempat_lahir"],
                    //     "tanggal_lahir"=>$set["tanggal_lahir"],
                    //     "id_mahasiswa"=>$set["id_mahasiswa"],
                    //     "id_agama"=>$set["id_agama"],
                    //     "nama_agama"=>$set["nama_agama"],
                    //     "nik"=>$set["nik"],
                    //     "nisn"=> $set["nisn"],
                    //     "npwp"=> $set["npwp"],
                    //     "id_negara"=>$set["id_negara"],
                    //     "kewarganegaraan"=>$set["kewarganegaraan"],
                    //     "jalan"=> $set["jalan"],
                    //     "dusun"=> $set["dusun"],
                    //     "rt"=> $set["rt"],
                    //     "rw"=> $set["rw"],
                    //     "kelurahan"=>$set["kelurahan"],
                    //     "kode_pos"=> $set["kode_pos"],
                    //     "id_wilayah"=>$set["id_wilayah"],
                    //     "nama_wilayah"=>$set["nama_wilayah"],
                    //     "id_jenis_tinggal"=> $set["id_jenis_tinggal"],
                    //     "nama_jenis_tinggal"=> $set["nama_jenis_tinggal"],
                    //     "id_alat_transportasi"=> $set["id_alat_transportasi"],
                    //     "nama_alat_transportasi"=> $set["nama_alat_transportasi"],
                    //     "telepon"=> $set["telepon"],
                    //     "handphone"=> $set["handphone"],
                    //     "email"=> $set["email"],
                    //     "penerima_kps"=>$set["penerima_kps"],
                    //     "nomor_kps"=> $set["nomor_kps"],
                    //     "nik_ayah"=> $set["nik_ayah"],
                    //     "nama_ayah"=> $set["nama_ayah"],
                    //     "tanggal_lahir_ayah"=> $set["tanggal_lahir_ayah"],
                    //     "id_pendidikan_ayah"=> $set["id_pendidikan_ayah"],
                    //     "nama_pendidikan_ayah"=> $set["nama_pendidikan_ayah"],
                    //     "id_pekerjaan_ayah"=> $set["id_pekerjaan_ayah"],
                    //     "nama_pekerjaan_ayah"=> $set["nama_pekerjaan_ayah"],
                    //     "id_penghasilan_ayah"=> $set["id_penghasilan_ayah"],
                    //     "nama_penghasilan_ayah"=> $set["nama_penghasilan_ayah"],
                    //     "nik_ibu"=> $set["nik_ibu"],
                    //     "nama_ibu_kandung"=>$set["nama_ibu_kandung"],
                    //     "nama_ibu"=>$set["nama_ibu"],
                    //     "tanggal_lahir_ibu"=> $set["tanggal_lahir_ibu"],
                    //     "id_pendidikan_ibu"=> $set["id_pendidikan_ibu"],
                    //     "nama_pendidikan_ibu"=> $set["nama_pendidikan_ibu"],
                    //     "id_pekerjaan_ibu"=> $set["id_pekerjaan_ibu"],
                    //     "nama_pekerjaan_ibu"=> $set["nama_pekerjaan_ibu"],
                    //     "id_penghasilan_ibu"=> $set["id_penghasilan_ibu"],
                    //     "nama_penghasilan_ibu"=> $set["nama_penghasilan_ibu"],
                    //     "nama_wali"=> $set["nama_wali"],
                    //     "tanggal_lahir_wali"=> $set["tanggal_lahir_wali"],
                    //     "id_pendidikan_wali"=> $set["id_pendidikan_wali"],
                    //     "nama_pendidikan_wali"=> $set["nama_pendidikan_wali"],
                    //     "id_pekerjaan_wali"=> $set["id_pekerjaan_wali"],
                    //     "nama_pekerjaan_wali"=> $set["nama_pekerjaan_wali"],
                    //     "id_penghasilan_wali"=> $set["id_penghasilan_wali"],
                    //     "nama_penghasilan_wali"=> $set["nama_penghasilan_wali"],
                    //     "id_kebutuhan_khusus_mahasiswa"=>$set["id_kebutuhan_khusus_mahasiswa"],
                    //     "nama_kebutuhan_khusus_mahasiswa"=>$set["nama_kebutuhan_khusus_mahasiswa"],
                    //     "id_kebutuhan_khusus_ayah"=>$set["id_kebutuhan_khusus_ayah"],
                    //     "nama_kebutuhan_khusus_ayah"=>$set["nama_kebutuhan_khusus_ayah"],
                    //     "id_kebutuhan_khusus_ibu"=>$set["id_kebutuhan_khusus_ibu"],
                    //     "nama_kebutuhan_khusus_ibu"=>$set["nama_kebutuhan_khusus_ibu"],
                        
                    // ];
                    $this->model->insert($value);
                    array_push($result, $value);
                }
            }
        }
        return $this->respond($result);
    }
}
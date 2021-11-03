<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataMahasiswaModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'biodata_mahasiswa';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id','nama_mahasiswa','jenis_kelamin','tempat_lahir','id_mahasiswa','id_agama',
                                        'nama_agama','nik','nisn','npwp','id_negara','kewarganegaraan','jalan','dusun',
                                        'rt','rw','kelurahan','kode_pos','id_wilayah','nama_wilayah','id_jenis_tinggal',
                                        'nama_jenis_tinggal','id_alat_transportasi','nama_alat_transportasi','telepon',
                                        'handphone','email','penerima_kps','nomor_kps','nik_ayah','nama_ayah','tanggal_lahir_ayah',
                                        'id_pendidikan_ayah','nama_pendidikan_ayah','id_pekerjaan_ayah','nama_pekerjaan_ayah',
                                        'id_penghasilan_ayah','nama_penghasilan_ayah','nik_ibu', 'nama_ibu','tanggal_lahir_ibu',
                                        'id_pendidikan_ibu','nama_pendidikan_ibu', 'id_pekerjaan_ibu','nama_pekerjaan_ibu',
                                        'id_penghasilan_ibu','nama_penghasilan_ibu', 'nama_wali','tanggal_lahir_wali',
                                        'id_pendidikan_wali','nama_pendidikan_wali', 'id_pekerjaan_wali','nama_pekerjaan_wali',
                                        'id_penghasilan_wali','nama_penghasilan_wali', 'users_id'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
}

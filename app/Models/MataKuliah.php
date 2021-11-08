<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliah extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'matakuliah';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id','id_prodi','kode_mata_kuliah','nama_mata_kuliah','id_jenis_mata_kuliah','id_kelompok_mata_kuliah',
                                        'sks_mata_kuliah','sks_tatap_muka','sks_praktek','sks_praktek_lapangan','sks_simulasi',
                                        'metode_kuliah','ada_sap', 'ada_silabus','ada_bahan_ajar','ada_acara_praktek','ada_diktat',
                                        'tangga;_mulai_efektif','tanggal_akhir_efektif','dosen_pengampuh_id'];

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

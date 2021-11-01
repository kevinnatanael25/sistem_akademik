<?php

namespace App\Models;

use CodeIgniter\Model;


class PerguruanTinggiModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'perguruan_tinggi';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id','kode_perguruan_tinggi', 'nama_perguruan_tinggi','telepon','faximile','email',
                                        'website','jalan', 'dusun', 'rt_rw', 'kelurahan', 'kode_pos', 'bank', 'unit_cabang',
                                        'nomor_rekening', 'mbs', 'luas_tanah_milik','luas_tanah_bukan_milik','sk_pendirian',
                                        'tanggal_sk_pendirian', 'status_perguruan_tinggi', 'sk_izin_operasional', 'tanggal_izin_operasional'];

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

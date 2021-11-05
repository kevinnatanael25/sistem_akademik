<div ng-controller="tahunAkademikController">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Biodata Mahasiswa</h3>
            <div class="card-tools">
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                  Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Jalan</th>
                        <th>Rt</th>
                        <th>Rw</th>
                        <th>Dusun</th>
                        <th>Kelurahan</th>
                        <th>Kode Pos</th>
                        <th>Nisn</th>
                        <th>Nik</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Ayah</th>
                        <th>Nik Ayah</th>
                        <th>Jenjang Pendidikan Ayah</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Penghasilan Ayah</th>
                        <th>Kebutuhan Khusus Ayah</th>
                        <th>Nama Ibu Kandung</th>
                        <th>Tanggal Lahir</th>
                        <th>Nik Ibu</th>
                        <th>Jenjang Pendidikan Ibu</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Penghasilan Ibu</th>
                        <th>Kebutuhan Khusus Ibu</th>
                        <th>Nama Wali</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenjang Pendidikan Wali</th>
                        <th>Pekerjaan Wali</th>
                        <th>Penghasilan Wali</th>
                        <th>Kebutuhan Khusus Mahasiswa</th>
                        <th>Telepon</th>
                        <th>Handphone</th>
                        <th>Email</th>
                        <th>Penerima Kps</th>
                        <th>No_Kps</th>
                        <th>Npwp</th>
                        <th>Wilayah</th>
                        <th>Jenis Tinggal</th>
                        <th>Agama</th>
                        <th>Alat Transportasi</th>
                        <th>Kewarganegaraan</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat = "item in datas">
                        <th>{{$index+1}}</th>
                        <th>{{item.nama_mahasiswa}}</th>
                        <th>{{item.jenis_kelamin}}</th>
                        <th>{{item.jalan}}</th>
                        <th>{{item.rt}}</th>
                        <th>{{item.rw}}</th>
                        <th>{{item.dusun}}</th>
                        <th>{{item.kelurahan}}</th>
                        <th>{{item.kode_pos}}</th>
                        <th>{{item.nisn}}</th>
                        <th>{{item.nik}}</th>
                        <th>{{item.tempat_lahir}}</th>
                        <th>{{item.tanggal_lahir}}</th>
                        <th>{{item.nama_ayah}}</th>
                        <th>{{item.nik_ayah}}</th>
                        <th>{{item.id_jenjang_pendidikan_ayah}}</th>
                        <th>{{item.id_pekerjaan_ayah}}</th>
                        <th>{{item.id_penghasilan_ayah}}</th>
                        <th>{{item.id_kebutuhan_khusus_ayah}}</th>
                        <th>{{item.nama_ibu_kandung}}</th>
                        <th>{{item.tanggal_lahir}}</th>
                        <th>{{item.nik_ibu}}</th>
                        <th>{{item.id_jenjang_pendidikan_ibu}}</th>
                        <th>{{item.id_pekerjaan_ibu}}</th>
                        <th>{{item.id_penghasilan_ibu}}</th>
                        <th>{{item.id_khusus_pendidikan_ibu}}</th>
                        <th>{{item.nama_wali}}</th>
                        <th>{{item.tanggal_lahir}}</th>
                        <th>{{item.id_jenjang_pendidikan_wali}}</th>
                        <th>{{item.id_pekerjaan_wali}}</th>
                        <th>{{item.id_penghasilan_wali}}</th>
                        <th>{{item.id_kebutuhan_khusus_mahasiswa}}</th>
                        <th>{{item.telepon}}</th>
                        <th>{{item.handphone}}</th>
                        <th>{{item.email}}</th>
                        <th>{{item.penerima_kps}}</th>
                        <th>{{item.no_kps}}</th>
                        <th>{{item.npwp}}</th>
                        <th>{{item.id_wilayah}}</th>
                        <th>{{item.id_jenis_tinggal}}</th>
                        <th>{{item.id_agama}}</th>
                        <th>{{item.id_alat_transportasi}}</th>
                        <th>{{item.kewarganegaraan}}</th>
                        <th>
                            <button type="button" class="btn btn-warning btn-sm" ng-click="edit(item)"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-sm" ng-click="delete(item)"><i class="fa fa-trash"></i></button>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                      <label for="">Tahun Akademik</label>
                                      <input type="text" name="" id="" class="form-control" ng-model="model.nama_tahun_akademik" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Semester</label>
                                      <select name="" id="" class="form-control" ng-model="model.semester">
                                          <option value="1">Ganjil</option>
                                          <option value="2">Genap</option>
                                          <option value="3">Pendek</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Tanggal Mulai</label>
                                      <input type="date" name="" id="" class="form-control" ng-model="model.tanggal_mulai" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Tanggal Selesai</label>
                                      <input type="date" name="" id="" class="form-control" ng-model="model.tanggal_selesai" placeholder="" aria-describedby="helpId">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" ng-click="save()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
</div>

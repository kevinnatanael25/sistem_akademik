<div ng-controller="perguruanTinggiController">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Perguruan Tinggi</h3>
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
                        <th>Kode Perguruan Tinggi</th>
                        <th>Nama Perguruan Tinggi</th>
                        <th>Telepon</th>
                        <th>Faximile</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Jalan</th>
                        <th>Dusun</th>
                        <th>Rt/Rw</th>
                        <th>Kelurahan</th>
                        <th>Kode Pos</th>
                        <th>ID Wilayah</th>
                        <th>Bank</th>
                        <th>Unit Cabang</th>
                        <th>No Rek</th>
                        <th>MBS</th>
                        <th>Luas Tanah Milik</th>
                        <th>Luas Tanah Bukan Milik</th>
                        <th>SK Pendirian</th>
                        <th>Tgl SK Pendirian</th>
                        <th>ID Status Milik</th>
                        <th>Status Perguruan Tinggi</th>
                        <th>SK Izin Operasional</th>
                        <th>Tgl Izin Operasional</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat = "item in datas">
                        <th>{{$index+1}}</th>
                        <th>{{item.kode_perguruan_tinggi}}</th>
                        <th>{{item.nama_perguruan_tinggi}}</th>
                        <th>{{item.telepon}}</th>
                        <th>{{item.faximile}}</th>
                        <th>{{item.email}}</th>
                        <th>{{item.website}}</th>
                        <th>{{item.jalan}}</th>
                        <th>{{item.dusun}}</th>
                        <th>{{item.rt_rw}}</th>
                        <th>{{item.kelurahan}}</th>
                        <th>{{item.kode_pos}}</th>
                        <th>{{item.id_wilayah}}</th>
                        <th>{{item.bank}}</th>
                        <th>{{item.unit_cabang}}</th>
                        <th>{{item.nomor_rekening}}</th>
                        <th>{{item.mbs}}</th>
                        <th>{{item.luas_tanah_milik}}</th>
                        <th>{{item.luas_tanah_bukan_milik}}</th>
                        <th>{{item.sk_pendirian}}</th>
                        <th>{{item.tanggal_sk_pendirian}}</th>
                        <th>{{item.id_status_milik}}</th>
                        <th>{{item.status_perguruan_tinggi}}</th>
                        <th>{{item.sk_izin_operasional}}</th>
                        <th>{{item.tanggal_izin_operasional}}</th>
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

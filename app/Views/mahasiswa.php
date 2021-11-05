<div ng-controller="mahasiswaController">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Mahasiswa</h3>
            <div class="card-tools">
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                  Tambah
                </button> -->
                
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NPM</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat = "item in datas">
                        <th>{{$index+1}}</th>
                        <th>{{item.nama_mahasiswa}}</th>
                        <th>{{item.nim}}</th>
                        <th>{{item.nama_agama}}</th>
                        <th>{{item.jenis_kelamin}}</th>
                        <th>
                            <button type="button" class="btn btn-warning btn-sm" ng-click="edit(item)"><i class="fa fa-edit"></i></button>                            
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

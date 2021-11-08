<div ng-controller="mahasiswaController">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Mahasiswa</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                  Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Mahasiswa</th>
                        <th class="text-center">NIM</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat = "item in datas">
                        <td class="text-center">{{$index+1}}</th>
                        <td class="text-center">{{item.nama_mahasiswa}}</th>
                        <td class="text-center">{{item.nim}}</td>
                        <td class="text-center">{{item.nama_agama}}</td>
                        <td class="text-center">{{item.jenis_kelamin}}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEdit" ng-click="edit(item)"><i class="fa fa-edit"></i></button>                           
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalDetail" ng-click="edit(item)"><i class="fa fa-eye"></i></button>                           
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- modal tambah data -->
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
                                      <label for="">Nama Mahasiswa</label>
                                      <input type="text" name="" id="" class="form-control" ng-model="model.nama_mahasiswa" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                      <label for="">NIM</label>
                                      <input type="text" name="" id="" class="form-control" ng-model="model.nim" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Jenis Kelamin</label>
                                      <input type="text" name="" id="" class="form-control" ng-model="model.jenis_kelamin" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Status</label>
                                      <input type="text" name="" id="" class="form-control" ng-model="model.status" placeholder="" aria-describedby="helpId">
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
                <!-- akhir modal tambah data -->


                <!-- modal detail -->
                <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- akhir modal detail -->

                <!-- modal edit -->
                <!-- Modal -->
                <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalEdit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- akhir modal edit -->
</div>

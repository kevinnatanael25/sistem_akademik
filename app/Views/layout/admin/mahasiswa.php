            <!-- Awal Content -->
            <div ng-controller="mahasiswaController">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Mahasiswa</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#modelId">
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
                                <tr ng-repeat="item in datas">
                                    <td class="text-center">{{$index+1}}</th>
                                    <td class="text-center">{{item.nama_mahasiswa}}</th>
                                    <td class="text-center">{{item.nim}}</td>
                                    <td class="text-center">{{item.nama_agama}}</td>
                                    <td class="text-center">{{item.jenis_kelamin}}</td>
                                    <td class="text-center">                                       
                                        <button type="button" class="btn btn-success btn-sm"
                                            ng-click="detailMahasiswa(item)"><i class="fa fa-eye"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Akhir Konten -->

                <!-- modal tambah data -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
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
                                        <input type="text" name="" id="" class="form-control"
                                            ng-model="model.nama_mahasiswa" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIM</label>
                                        <input type="text" name="" id="" class="form-control" ng-model="model.nim"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <input type="text" name="" id="" class="form-control"
                                            ng-model="model.jenis_kelamin" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="" id="" class="form-control" ng-model="model.status"
                                            placeholder="" aria-describedby="helpId">
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
                <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="col-lg-12">
                            <div class="text-center card card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb mx-auto"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                            class="rounded-circle img-thumbnail" alt="profile-image">
                                    </div>
                                    <div class="">
                                        <h4>{{model.nama_mahasiswa}}</h4>
                                        <p class="text-muted">{{model.nim}}</p>
                                        <p class="text-muted">{{model.nama_program_studi}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-content">
                        </div> -->
                    </div>
                </div>
                <!-- akhir modal detail -->

                <!-- modal edit -->
                <!-- Modal -->
                
            </div>
            <!-- akhir modal tambah data -->
            <style>
.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(121, 121, 121, .8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, .5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}

.thumb-lg {
    height: 88px;
    width: 88px;
}

.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}

.text-pink {
    color: #ff679b !important;
}

.btn-rounded {
    border-radius: 2em;
}

.text-muted {
    color: #98a6ad !important;
}

h4 {
    line-height: 22px;
    font-size: 18px;
}
            </style>

            <!-- modal detail -->

            <!-- akhir modal edit -->
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
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#modalEdit" ng-click="edit(item)"><i
                                                class="fa fa-edit"></i></button>
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
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="container rounded bg-white mt-5 mb-5">
                                        <div class="row">
                                            <div class="col-md-3 border-right">
                                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                    <img class="rounded-circle mt-5" width="150px"
                                                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                                                        class="font-weight-bold">Edogaru</span><span
                                                        class="text-black-50">edogaru@mail.com.my</span><span> </span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 border-right">
                                                <div class="p-3 py-5">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h4 class="text-right">Profile Settings</h4>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6"><label class="labels">Name</label><input
                                                                type="text" class="form-control"
                                                                placeholder="first name" value=""></div>
                                                        <div class="col-md-6"><label
                                                                class="labels">Surname</label><input type="text"
                                                                class="form-control" value="" placeholder="surname">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12"><label class="labels">Mobile
                                                                Number</label><input type="text" class="form-control"
                                                                placeholder="enter phone number" value=""
                                                                ng-model="model.nama">
                                                        </div>
                                                        <div class="col-md-12"><label class="labels">Address Line
                                                                1</label><input type="text" class="form-control"
                                                                placeholder="enter address line 1" value=""></div>
                                                        <div class="col-md-12"><label class="labels">Address Line
                                                                2</label><input type="text" class="form-control"
                                                                placeholder="enter address line 2" value=""></div>
                                                        <div class="col-md-12"><label
                                                                class="labels">Postcode</label><input type="text"
                                                                class="form-control" placeholder="enter address line 2"
                                                                value=""></div>
                                                        <div class="col-md-12"><label class="labels">State</label><input
                                                                type="text" class="form-control"
                                                                placeholder="enter address line 2" value=""></div>
                                                        <div class="col-md-12"><label class="labels">Area</label><input
                                                                type="text" class="form-control"
                                                                placeholder="enter address line 2" value=""></div>
                                                        <div class="col-md-12"><label class="labels">Email
                                                                ID</label><input type="text" class="form-control"
                                                                placeholder="enter email id" value=""></div>
                                                        <div class="col-md-12"><label
                                                                class="labels">Education</label><input type="text"
                                                                class="form-control" placeholder="education" value="">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6"><label
                                                                class="labels">Country</label><input type="text"
                                                                class="form-control" placeholder="country" value="">
                                                        </div>
                                                        <div class="col-md-6"><label
                                                                class="labels">State/Region</label><input type="text"
                                                                class="form-control" value="" placeholder="state"></div>
                                                    </div>
                                                    <div class="mt-5 text-center"><button
                                                            class="btn btn-primary profile-button" type="button">Save
                                                            Profile</button></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="p-3 py-5">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center experience">
                                                        <span>Edit Experience</span><span
                                                            class="border px-3 p-1 add-experience"><i
                                                                class="fa fa-plus"></i>&nbsp;Experience</span>
                                                    </div><br>
                                                    <div class="col-md-12"><label class="labels">Experience in
                                                            Designing</label><input type="text" class="form-control"
                                                            placeholder="experience" value=""></div> <br>
                                                    <div class="col-md-12"><label class="labels">Additional
                                                            Details</label><input type="text" class="form-control"
                                                            placeholder="additional details" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            </div>

            <style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
            </style>
            <!-- akhir modal tambah data -->


            <!-- modal detail -->

            <!-- akhir modal edit -->
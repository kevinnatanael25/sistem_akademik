angular.module("admin.controllers", [])
.controller("tahapanController", tahapanController)
.controller("mahasiswaController", mahasiswaController)
.controller("tahunAkademikController", tahunAkademikController)
.controller("perguruanTinggiController", tahunAkademikController)
;

function tahapanController($scope, tahapanServices) {
    $scope.datas = [];
    tahapanServices.get().then(res=>{
        $scope.datas = res;
        console.log(res);
    })
}
function mahasiswaController($scope, mahasiswaServices) {
    $scope.datas = [];
    mahasiswaServices.get().then(res=>{
        $scope.datas = res;
        console.log(res);
    })
}
function tahunAkademikController($scope, tahunAkademikServices) {
    $scope.datas = [];
    $scope.model={};
    tahunAkademikServices.get().then(res=>{
        $scope.datas = res;
        console.log(res);
    })

    $scope.save =()=>{
        if($scope.model.id){
            tahunAkademikServices.put($scope.model).then(res=>{
                $("#modelId").modal('hide');
            })
        }else{
            tahunAkademikServices.post($scope.model).then(res=>{
    
            })
        }
    }

    $scope.delete = (item)=>{
        tahunAkademikServices.deleted(item).then(res=>{

        })
    }

    $scope.edit = (item)=>{
        $scope.model = angular.copy(item);
        $scope.model.tanggal_mulai = new Date($scope.model.tanggal_mulai);
        $scope.model.tanggal_selesai = new Date($scope.model.tanggal_selesai);
        $("#modelId").modal('show');
    }
}
function perguruanTinggiController($scope, perguruanTinggiServices) {
    $scope.datas = [];
    tahunAkademik.get().then(res=>{
        $scope.datas = res;
        console.log(res);
    })
}
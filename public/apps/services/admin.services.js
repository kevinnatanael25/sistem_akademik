angular.module('admin.services',[])
.factory("tahapanServices", tahapanServices)
.factory("mahasiswaServices", mahasiswaServices)
.factory("tahunAkademikServices", tahunAkademikServices)
;

function tahapanServices($http, $q, helperServices) {
    var controller = helperServices.url + 'tahapan/';
    var service = {}
    service.data = [];
    return {
        get:get, post:post, put:put, deleted:deleted
    }

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/read",
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function post(param) {
        var def = $q.defer();
        $http({
            method: 'post',
            url: controller + "/post",
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data.push(res,data);
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function put(param) {
        var def = $q.defer();
        $http({
            method: 'put',
            url: controller + "/put/"+param.id,
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function deleted(param) {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/delete/"+param.id,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
}
function mahasiswaServices($http, $q, helperServices) {
    var controller = helperServices.url + 'mahasiswa/';
    var service = {}
    service.data = [];
    return {
        get:get, post:post, put:put, deleted:deleted
    }

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "read",
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function post(param) {
        var def = $q.defer();
        $http({
            method: 'post',
            url: controller + "/post",
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data.push(res,data);
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function put(param) {
        var def = $q.defer();
        $http({
            method: 'put',
            url: controller + "/put/"+param.id,
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function deleted(param) {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/delete/"+param.id,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
}
function tahunAkademikServices($http, $q, helperServices) {
    var controller = helperServices.url + 'tahun_akademik/';
    var service = {}
    service.data = [];
    return {
        get:get, post:post, put:put, deleted:deleted
    }

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/read",
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function post(param) {
        var def = $q.defer();
        $http({
            method: 'post',
            url: controller + "/post",
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data.push(res.data);
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function put(param) {
        var def = $q.defer();
        $http({
            method: 'put',
            url: controller + "/put/"+param.id,
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            var data = service.data.find(x=>x.id==param.id);
            if(data){
                data.nama_tahun_akademik = param.nama_tahun_akademik;
                data.semester = param.semester;
                data.tanggal_mulai = param.tanggal_mulai;
                data.tanggal_selesai = param.tangga_selesai;
            }
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function deleted(param) {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/delete/"+param.id,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            var data = service.data.find(x=>x.id == param.id);
            if(data){
                var index = service.data.indexOf(data);
                service.data.splice(index, 1);
            }
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
}
function perguruanTinggiServices($http, $q, helperServices) {
    var controller = helperServices.url + 'perguruantinggi/';
    var service = {}
    service.data = [];
    return {
        get:get, post:post, put:put, deleted:deleted
    }

    function get() {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "read",
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function post(param) {
        var def = $q.defer();
        $http({
            method: 'post',
            url: controller + "/post",
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data.push(res,data);
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function put(param) {
        var def = $q.defer();
        $http({
            method: 'put',
            url: controller + "/put/"+param.id,
            data: param,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
    function deleted(param) {
        var def = $q.defer();
        $http({
            method: 'get',
            url: controller + "/delete/"+param.id,
            headers: {'Content-Type': 'application/json'}
        }).then((res)=>{
            service.data = res.data;
            def.resolve(res.data)
        },(err)=>{
            def.reject(err);
        })
        return def.promise;
    }
}
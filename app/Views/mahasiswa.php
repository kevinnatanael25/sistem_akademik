<div class="card">
    <div class="card-header">
        <h5>List Mahasiswa</h5>
    </div>
    <div class="card-body">
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NPM</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $key => $value):?>
                <tr>
                    <td><?= $value->nama_mahasiswa?></td>
                    <td><?= $value->nim?></td>
                    <td><?= $value->nama_agama?></td>
                    <td><?= $value->jenis_kelamin?></td>
                    <td><?= $value->nama_status_mahasiswa?></td>
                </tr>

                <?php  endforeach;?>
            </tbody>
        </table>
    </div>
</div>
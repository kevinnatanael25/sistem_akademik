<div class="card">
    <div class="card-header">
        <h5>List Mahasiswa</h5>
    </div>
    <div class="card-body">
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Matakuliah</th>
                    <th>SKS</th>
                    <th>Program Studi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($matakuliah as $key => $value):?>
                <tr>
                    <td><?= $key + 1?></td>
                    <td><?= $value->nama_mata_kuliah?></td>
                    <td><?= $value->kode_mata_kuliah?></td>
                    <td><?= $value->sks_mata_kuliah?></td>
                    <td><?= $value->nama_program_studi?></td>
                </tr>

                <?php  endforeach;?>
            </tbody>
        </table>
    </div>
</div>
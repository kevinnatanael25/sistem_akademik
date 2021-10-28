<table class="table table-sm table-bordered">
    <tr>
        <th>Tahun Ajaran</th>
        <th>Nama Semester</th>
        <th>Semester</th>
    </tr>
    <?php foreach ($tahun_akademik as $key => $value): ?>
        <tr>
            <td><?= $value->id_tahun_ajaran?></td>
            <td><?= $value->nama_semester?></td>
            <td><?= $value->semester?></td>
        </tr>
    <?php endforeach;?>
</table>